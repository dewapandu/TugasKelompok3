<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MenuController extends Controller
{
    public function index()
    {
        echo view("menu");
    }
}
