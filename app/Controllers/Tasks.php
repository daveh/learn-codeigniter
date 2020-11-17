<?php

namespace App\Controllers;

class Tasks extends BaseController
{
	public function index()
	{
		$data = [
			['id' => 1, 'description' => 'First task'],
			['id' => 2, 'description' => 'Second task']
		];
		
		return view("Tasks/index", ['tasks' => $data]);
	}

	//--------------------------------------------------------------------

}