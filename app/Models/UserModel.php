<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_tbl';
    protected $allowedFields = ['name', 'email', 'password', 'phonenumber', 'datecreated', 'role'];
}
