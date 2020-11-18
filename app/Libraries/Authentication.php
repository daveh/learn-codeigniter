<?php

namespace App\Libraries;

class Authentication
{
    private $user;
    
    public function login($email, $password, $remember_me)
    {
        $model = new \App\Models\UserModel;

        $user = $model->findByEmail($email);
                      
        if ($user === null) {
            
            return false;
            
        }
        
        if ( ! $user->verifyPassword($password)) {
            
            return false;
            
        }
        
        if ( ! $user->is_active) {
            
            return false;
            
        }
        
        $session = session();
        $session->regenerate();
        $session->set('user_id', $user->id);
        
        if ($remember_me) {
            
            $this->rememberLogin($user->id);
            
        }
        
        return true;
    }
    
    private function rememberLogin($user_id)
    {
        $model = new \App\Models\RememberedLoginModel;
        
        list($token, $expiry) = $model->rememberUserLogin($user_id);
        
        $response = service('response');
        
        $response->setCookie('remember_me', $token, $expiry);
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
    
        if ($this->user === null) {
        
            $model = new \App\Models\UserModel;
            
            $user = $model->find(session()->get('user_id'));
            
            if ($user && $user->is_active) {
                
                $this->user = $user;
            }
        }
        
        return $this->user;
    }
    
    public function isLoggedIn()
    {
        return $this->getCurrentUser() !== null;
    }
}






