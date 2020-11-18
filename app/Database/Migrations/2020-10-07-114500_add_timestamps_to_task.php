<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToTask extends Migration
{
    public function up()
	{
        $this->forge->addColumn('task', [
            'created_at' => [
                'type'     => 'DATETIME',
                'null'     => true,
                'default'  => null
            ],
            'updated_at' => [
                'type'     => 'DATETIME',
                'null'     => true,
                'default'  => null
            ]
        ]);
    }
    
    public function down()
	{
        $this->forge->dropColumn('task', 'updated_at');
        $this->forge->dropColumn('task', 'created_at');
    }
}