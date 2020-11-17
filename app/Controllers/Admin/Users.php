<?php 

namespace App\Controllers\Admin;

class Users extends \App\Controllers\BaseController
{
    private $model;
    
    public function __construct()
    {
        $this->model = new \App\Models\UserModel;
    }
    
    public function index()
	{
        $users = $this->model->orderBy('id')
                             ->paginate(5);
        
		return view('Admin/Users/index', [
            'users' => $users,
            'pager' => $this->model->pager
        ]);
    }
}