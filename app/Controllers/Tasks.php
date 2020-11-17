<?php

namespace App\Controllers;

use App\Entities\Task;

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
        $task = new Task;
		
		return view('Tasks/new', [
		    'task' => $task
        ]);
	}
	
	public function create()
	{
        $model = new \App\Models\TaskModel;
		
		$task = new Task($this->request->getPost());
		
		if ($model->insert($task)) {

			return redirect()->to("/tasks/show/{$model->insertID}")
							 ->with('info', 'Task created successfully');
		
        } else {

			return redirect()->back()
							 ->with('errors', $model->errors())
							 ->with('warning', 'Invalid data')
							 ->withInput();
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
		
		$task = $model->find($id);
		
		$task->fill($this->request->getPost());
		
		if ( ! $task->hasChanged()) {
			
            return redirect()->back()
                             ->with('warning', 'Nothing to update')
                             ->withInput();
		}
		
        if ($model->save($task)) {
				
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









