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
    
    public function update()
    {
        $this->user->fill($this->request->getPost());
        
        if ( ! $this->user->hasChanged()) {
            
            return redirect()->back()
                             ->with('warning', 'Nothing to update')
                             ->withInput();
        }
        
        $model = new \App\Models\UserModel;
        
        if ($model->save($this->user)) {
            
            return redirect()->to("/profile/show")
                             ->with('info', 'Details updated successfully');
        } else {
            
            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', 'Invalid data')
                             ->withInput();
        }
    }
    
    public function editPassword()
    {
		return view('Profile/edit_password');
    }
}















