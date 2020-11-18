<?php

namespace App\Controllers;

class Profile extends BaseController
{
    private $user;
    
    public function __construct()
    {
        $this->user = service('auth')->getCurrentUser();
    }
    
    public function show()
	{
        return view('Profile/show', [
            'user' => $this->user
        ]);
    }
        
    public function edit()
    {
        return view('Profile/edit', [
            'user' => $this->user
        ]);
    }
}