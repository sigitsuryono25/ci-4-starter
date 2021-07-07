<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbFoto extends Migration
{
	protected $tablename = "tb_galeri";

	public function up()
	{
		$this->forge->addField([
			'id_foto' => [
				'type' => "BIGINT",
				'auto_increment' => true
			],
			'nama_file' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'deskripsi' => [
				'type' => 'TEXT',
			]
		]);
		$this->forge->addKey('id_foto', true);
		$this->forge->createTable($this->tablename);
	}

	public function down()
	{
		$this->forge->dropTable($this->tablename);
	}
}
