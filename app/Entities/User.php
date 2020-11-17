<?php 

namespace App\Entities;

class User extends \CodeIgniter\Entity
{
    public function verifyPassword($password)
    {    
        return password_verify($password, $this->password_hash);
    }
}