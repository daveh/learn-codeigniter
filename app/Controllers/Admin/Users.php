<?php 

namespace App\Controllers\Admin;

class Users extends \App\Controllers\BaseController
{
    public function index()
	{
		return view('Admin/Users/index');
    }
}