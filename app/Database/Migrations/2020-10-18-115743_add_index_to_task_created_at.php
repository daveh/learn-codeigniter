<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIndexToTaskCreatedAt extends Migration
{
	public function up()
	{
        $this->db->simpleQuery("ALTER TABLE task ADD INDEX (created_at)");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->db->simpleQuery("ALTER TABLE task DROP INDEX created_at");
	}
}
