<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;

class RegisterController extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user_tbl.email]',
            'password'      => 'required|min_length[6]|max_length[200]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $currentTime = new Time('now');
            $data = [
                'name'     => $_POST['name'],
                'email'    => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'phonenumber' => $_POST['phone_number'],
                'role' => '2',
                'datecreated' => $currentTime
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
