<?php

if ( ! function_exists('current_user')) {
    
	function current_user()
    {
        $auth = service('auth');
        
        return $auth->getCurrentUser();
    }
}