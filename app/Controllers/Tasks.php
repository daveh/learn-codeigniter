<?php

namespace App\Controllers;

class Tasks extends BaseController
{
	public function index()
	{
        $model = new \App\Models\TaskModel;
        $data = $model->findAll();
		
		return view("Tasks/index", ['tasks' => $data]);
	}
	
	public function show($id)
    {
        $model = new \App\Models\TaskModel;
		
        $task = $model->find($id);
		
		return view('Tasks/show', [
            'task' => $task
        ]);
	}
	
	public function new()
	{
		return view('Tasks/new', [
		    'task' => ['description' => '']
        ]);
	}
	
	public function create()
	{
        $model = new \App\Models\TaskModel;
		
		$result = $model->insert([
			'description' => $this->request->getPost("description")
		]);
		
        if ($result === false) {
			
            return redirect()->back()
							 ->with('errors', $model->errors())
							 ->with('warning', 'Invalid data')
							 ->withInput();
		
        } else {
		
			return redirect()->to("/tasks/show/$result")
							 ->with('info', 'Task created successfully');
			
		}
	}
	
	public function edit($id)
	{
		$model = new \App\Models\TaskModel;
		
        $task = $model->find($id);
		
		return view('Tasks/edit', [
            'task' => $task
        ]);
	}
	
    public function update($id)
	{
        $model = new \App\Models\TaskModel;
		
		$result = $model->update($id, [
            'description' => $this->request->getPost('description')
		]);
		
		if ($result) {
		
	        return redirect()->to("/tasks/show/$id")
	                         ->with('info', 'Task updated successfully');
							 
		} else {
			
            return redirect()->back()
                             ->with('errors', $model->errors())
                             ->with('warning', 'Invalid data')
							 ->withInput();
			
		}
	}
}









