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
}