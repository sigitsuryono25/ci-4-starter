<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbBerita extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_berita' => [
				'type' => "BIGINT",
				'auto_increment' => true
			],
			'judul_berita' => [
				'type' => "VARCHAR",
				'constraint' => 100
			],
			'isi' => [
				'type' => "TEXT"
			],
			'slug' => [
				'type' => "VARCHAR",
				'constraint' => 200
			]
		]);
		$this->forge->addKey("id_berita");
		$this->forge->createTable("tb_berita", true);
	}

	public function down()
	{
		$this->forge->dropTable("tb_berita", true);
	}
}
