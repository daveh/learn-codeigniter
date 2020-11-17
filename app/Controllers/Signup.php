<?php 

namespace App\Controllers;

class Signup extends BaseController
{
    public function new()
    {
		return view("Signup/new");
    }
    
    public function create()
    {
        $user = new \App\Entities\User($this->request->getPost());
        
        $model = new \App\Models\UserModel;
        
        $model->insert($user);
        
        echo "Signed up";
    }
}