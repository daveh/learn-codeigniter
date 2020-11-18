<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIsAdminToUser extends Migration
{
	public function up()
	{
		$this->forge->addColumn('user', [
            'is_admin' => [
				'type'    => 'BOOLEAN',
                'null'    => false,
                'default' => false
			]
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropColumn('user', 'is_admin');
	}
}
