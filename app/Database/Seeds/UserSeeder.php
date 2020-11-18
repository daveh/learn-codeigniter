<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
        $model = new \App\Models\UserModel;
		
        $data = [
			'name'     => 'Admin',
			'email'    => 'admin@example.com',
			'password' => 'secret',
			'is_admin' => true,
			'is_active' => true
		];
		
        $model->skipValidation(true)
              ->protect(false)
			  ->insert($data);
		
        dd($model->errors());
	}
}
