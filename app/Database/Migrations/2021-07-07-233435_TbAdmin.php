<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbAdmin extends Migration
{
	protected $tableName = "tb_admin";

	public function up()
	{
		$this->forge->addField([
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			]
		]);
		$this->forge->addKey("username", true);
		$this->forge->createTable($this->tableName, true);
	}

	public function down()
	{
		$this->forge->dropTable($this->tableName, true);
	}
}
