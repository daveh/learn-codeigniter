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
        
        $token = bin2hex(random_bytes(16));
        
        $hash = hash_hmac('sha256', $token, $_ENV['HASH_SECRET_KEY']);
        
        dd($hash);
        
        if ($model->insert($user)) {
        
            return redirect()->to("/signup/success");
            
        } else {
            
            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', 'Invalid data')
                             ->withInput();
        }
    }
    
    public function success()
    {
		return view('Signup/success');
    }
}











