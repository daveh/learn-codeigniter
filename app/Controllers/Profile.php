<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function show()
	{
        $user = service('auth')->getCurrentUser();
        
        return view('Profile/show', [
            'user' => $user
        ]);
    }
}