<?php

namespace App\Models;

class TaskModel extends \CodeIgniter\Model
{
    protected $table = 'task';
    
    protected $allowedFields = ['description', 'user_id'];
    
    protected $returnType = 'App\Entities\Task';
    
    protected $useTimestamps = true;
    
    protected $validationRules = [
        'description' => 'required'
    ];
    
    protected $validationMessages = [
        'description' => [
            'required' => 'Please enter a description'
        ]
    ];
    
    public function getTasksByUserId($id)
    {
        return $this->where('user_id', $id)
                    ->orderBy('created_at')
                    ->findAll();
    }
    
    public function getTaskByUserId($id, $user_id)    
    {
        return $this->where('id', $id)
                    ->where('user_id', $user_id)
                    ->first();
    }
}






