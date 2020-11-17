<?php

if ( ! function_exists('current_user')) {
    
	function current_user()
    {
        if ( ! session()->has('user_id')) {
            
            return null;
            
        }
        
        $model = new \App\Models\UserModel;
        
        return $model->find(session()->get('user_id'));
    }
}