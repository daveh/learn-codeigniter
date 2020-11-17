<?php

namespace App\Libraries;

class Authentication
{
    public function login($email, $password)
    {
        $model = new \App\Models\UserModel;

        $user = $model->where('email', $email)
                      ->first();
                      
        if ($user === null) {
            
            return false;
            
        }
        
        if ( ! password_verify($password, $user->password_hash)) {
            
            return false;
            
        }
        
        $session = session();
        $session->regenerate();
        $session->set('user_id', $user->id);
        
        return true;
    }
    
    public function logout()
    {
        session()->destroy();
    }
    
    public function getCurrentUser()
    {
        if ( ! session()->has('user_id')) {
            
            return null;
            
        }
        
        $model = new \App\Models\UserModel;
        
        return $model->find(session()->get('user_id'));
    }
}






