<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        // $this->load->view('header');
        echo view('dashboard');
        // $this->load->view('footer');
    }
}
