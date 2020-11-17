<?php

namespace App\Models;

class TaskModel extends \CodeIgniter\Model
{
    protected $table = 'task';
    
    protected $allowedFields = ['description'];
    
    protected $returnType = 'App\Entities\Task';
    
    protected $validationRules = [
        'description' => 'required'
    ];
    
    protected $validationMessages = [
        'description' => [
            'required' => 'Please enter a description'
        ]
    ];
}