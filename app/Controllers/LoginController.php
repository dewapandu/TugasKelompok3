<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends Controller
{

    public function index() //default function 
    {
        helper(['form']); // helper form digunakan untuk menjalankan function – function yang terdapat pada form, membantu pengecekan data pada form 
        echo view('login'); //return view dengan nama file login.php
    }

    public function auth()
    {
        $session = session(); //create session
        $model = new UserModel(); // declare new usermodel
        $email = $_POST['email']; // menyimpan value dari form login dengan attribute name username
        $password = $_POST['password']; //menyimpan value dari form login dengan attribute name password
        $data = $model->where('Email', $email)->first(); //Load data in userModel dengan email value sesuai inputan form
        if ($data) {
            $pass = $data['Password']; //menyimpan password dari database 
            $verify_pass = password_verify($password, $pass); // compare value password form & password from db 
            if ($verify_pass) { //return true if $password match $pass
                //menyimpan data dari model ke $ses_data yang akan disimpan ke session data 
                $ses_data = [
                    'id'       => $data['Id'],
                    'name'     => $data['Name'],
                    'email'    => $data['Email'],
                    'role'     => $data['Role'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data); // set data user yang sedang login, sehingga data tersebut dapat dibaca oleh seluruh file didalam server.
                return redirect()->to('/dashboard'); //redirect to dashboard controller
            } else {
                $session->setFlashdata('msg', 'Wrong Password'); // set pesan error 
                return redirect()->to('/login'); // redirect to login controller if no data return from model
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found'); // Jika data dari userModel tidak return 
            return redirect()->to('/login'); //redirect to controller login
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Menghapus session data 
        return redirect()->to('/login'); // redirect to login cntroller
    }
}
