<?php

if ( ! function_exists('current_user')) {
    
	function current_user()
    {
        $auth = new \App\Libraries\Authentication;
        
        return $auth->getCurrentUser();
    }
}