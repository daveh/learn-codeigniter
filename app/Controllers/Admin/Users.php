<?php 

namespace App\Controllers\Admin;

use App\Entities\User;

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
    
    public function show($id)
    {
        $user = $this->getUserOr404($id);
		
		return view('Admin/Users/show', [
            'user' => $user
        ]);
	}
    
    public function new()
	{
        $user = new User;
		
		return view('Admin/Users/new', [
		    'user' => $user
        ]);
	}
	
	public function create()
	{
        $user = new User($this->request->getPost());
		
		if ($this->model->protect(false)
                        ->insert($user)) {

			return redirect()->to("/admin/users/show/{$this->model->insertID}")
							 ->with('info', 'User created successfully');
		
        } else {

			return redirect()->back()
							 ->with('errors', $this->model->errors())
							 ->with('warning', 'Invalid data')
							 ->withInput();
		}
	}
    
    public function edit($id)
	{
		$user = $this->getUserOr404($id);
		
		return view('Admin/Users/edit', [
            'user' => $user
        ]);
	}
    
    public function update($id)
	{
        $user = $this->getUserOr404($id);
		
		$post = $this->request->getPost();
        
        if (empty($post['password'])) {
            
            $this->model->disablePasswordValidation();
            
            unset($post['password']);
            unset($post['password_confirmation']);
        }
		
		$user->fill($post);
		
		if ( ! $user->hasChanged()) {
			
            return redirect()->back()
                             ->with('warning', 'Nothing to update')
                             ->withInput();
		}
		
        if ($this->model->protect(false)
                        ->save($user)) {
				
	        return redirect()->to("/admin/users/show/$id")
	                         ->with('info', 'User updated successfully');
							 
		} else {
			
            return redirect()->back()
                             ->with('errors', $this->model->errors())
                             ->with('warning', 'Invalid data')
							 ->withInput();
			
		}
	}
    
    public function delete($id)
	{
        $user = $this->getUserOr404($id);
		
        if ($this->request->getMethod() === 'post') {
			
            $this->model->delete($id);
			
			return redirect()->to('/admin/users')
                             ->with('info', 'User deleted');
		}
		
		return view('Admin/Users/delete', [
            'user' => $user
        ]);
	}
    
    private function getUserOr404($id)
	{
        $user = $this->model->where('id', $id)
                            ->first();
		
		if ($user === null) {

			throw new \CodeIgniter\Exceptions\PageNotFoundException("User with id $id not found");
			
		}		
		
		return $user;
	}
}



