<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRememberedLogin extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'token_hash' => [
				'type'       => 'VARCHAR',
				'constraint' => '64'
			],
            'user_id' => [
				'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true
			],
            'expires_at' => [
                'type' => 'DATETIME'
			]
		]);
		
        $this->forge->addPrimaryKey('token_hash')
		            ->addForeignKey('user_id', 'user', 'id', 'CASCADE', 'CASCADE')
                    ->addKey('expires_at');
					
        $this->forge->createTable('remembered_login');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('remembered_login');
	}
}








