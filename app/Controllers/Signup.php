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

        $user->startActivation();
        
        if ($model->insert($user)) {
            
            $this->sendActivationEmail($user);
        
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
    
    public function activate($token)
    {
        $model = new \App\Models\UserModel;
        
        $model->activateByToken($token);
        
		return view('Signup/activated');
    }
    
    private function sendActivationEmail($user)
    {
        $email = service('email');

        $email->setTo($user->email);

        $email->setSubject('Account activation');

        $message = view('Signup/activation_email', [
            'token' => $user->token
        ]);

        $email->setMessage($message);

        $email->send();
    }
}











