<?php

namespace App\Controllers;

class Seed extends BaseController
{
    public function index()
    {
        $seeder = \Config\Database::seeder();
        $seeder->call('UserSeeder');
        
        echo "Seeded.";
    }
}