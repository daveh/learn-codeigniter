<?php

namespace App\Controllers;

use App\Entities\Task;

class Tasks extends BaseController
{
	private $model;
	
	private $current_user;
	
	public function __construct()
	{
        $this->model = new \App\Models\TaskModel;
		$this->current_user = service('auth')->getCurrentUser();
	}
	
	public function index()
	{
		$data = $this->model->paginateTasksByUserId($this->current_user->id);
		
		return view("Tasks/index", [
			'tasks' => $data,
            'pager' => $this->model->pager
		]);
	}
	
	public function show($id)
    {
        $task = $this->getTaskOr404($id);
		
		return view('Tasks/show', [
            'task' => $task
        ]);
	}
	
	public function new()
	{
        $task = new Task;
		
		return view('Tasks/new', [
		    'task' => $task
        ]);
	}
	
	public function create()
	{
        $task = new Task($this->request->getPost());
		
		$task->user_id = $this->current_user->id;
		
		if ($this->model->insert($task)) {

			return redirect()->to("/tasks/show/{$this->model->insertID}")
                             ->with('info', lang('Tasks.create_successful'));
		
        } else {

			return redirect()->back()
							 ->with('errors', $this->model->errors())
                             ->with('warning', lang('App.messages.invalid'))
							 ->withInput();
		}
	}
	
	public function edit($id)
	{
		$task = $this->getTaskOr404($id);
		
		return view('Tasks/edit', [
            'task' => $task
        ]);
	}
	
    public function update($id)
	{
        $task = $this->getTaskOr404($id);
		
		$post = $this->request->getPost();
		unset($post['user_id']);
		
		$task->fill($post);
		
		if ( ! $task->hasChanged()) {
			
            return redirect()->back()
                             ->with('warning', lang('App.messages.no_change'))
                             ->withInput();
		}
		
        if ($this->model->save($task)) {
				
	        return redirect()->to("/tasks/show/$id")
                             ->with('info', lang('Tasks.update_successful'));
							 
		} else {
			
            return redirect()->back()
                             ->with('errors', $this->model->errors())
                             ->with('warning', lang('App.messages.invalid'))
							 ->withInput();
			
		}
	}
	
	public function delete($id)
	{
        $task = $this->getTaskOr404($id);
		
        if ($this->request->getMethod() === 'post') {
			
            $this->model->delete($id);
			
			return redirect()->to('/tasks')
                             ->with('info', lang('Tasks.deleted'));
		}
		
		return view('Tasks/delete', [
            'task' => $task
        ]);
	}
	
	public function search()
    {
        $tasks = $this->model->search($this->request->getGet('q'), $this->current_user->id);
		
        return $this->response->setJSON($tasks);
	}
	
    private function getTaskOr404($id)
	{
		/*
		$task = $this->model->find($id);
		
		if ($task !== null && ($task->user_id !== $user->id)) {
		
			$task = null;
			
		}
		*/
		
        $task = $this->model->getTaskByUserId($id, $this->current_user->id);
		
		if ($task === null) {

            throw new \CodeIgniter\Exceptions\PageNotFoundException(lang('Tasks.task_not_found') . ': ' . $id);
			
		}		
		
		return $task;
	}	
}









