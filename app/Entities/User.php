<?php 

namespace App\Entities;

class User extends \CodeIgniter\Entity
{
    public function verifyPassword($password)
    {    
        return password_verify($password, $this->password_hash);
    }
    
    public function startActivation()
    {
        $token = bin2hex(random_bytes(16));
        
        $this->activation_hash = hash_hmac('sha256', $token, $_ENV['HASH_SECRET_KEY']);
    }
}