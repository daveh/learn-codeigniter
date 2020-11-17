<?php

namespace App\Models;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'user';
    
    protected $allowedFields = ['name', 'email'];
    
    protected $returnType = 'App\Entities\User';
    
    protected $useTimestamps = true;
}