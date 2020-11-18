<?php 

namespace App\Entities;

use App\Libraries\Token;

class User extends \CodeIgniter\Entity
{
    public function verifyPassword($password)
    {    
        return password_verify($password, $this->password_hash);
    }
    
    public function startActivation()
    {
        $token = new Token;
        
        $this->token = $token->getValue();
        
        $this->activation_hash = $token->getHash();
    }
    
    public function activate()
    {
        $this->is_active = true;
        $this->activation_hash = null;
    }
}