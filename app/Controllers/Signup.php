<?php 

namespace App\Controllers;

class Signup extends BaseController
{
    public function new()
    {
		return view("Signup/new");
    }
}