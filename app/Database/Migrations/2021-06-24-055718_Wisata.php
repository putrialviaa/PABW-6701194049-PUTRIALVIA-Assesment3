<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wisata extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id_wisata'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nama_wisata'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'lokasi_wisata'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'deskripsi_wisata' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
			'gambar_wisata' => [
				'type'           => 'VARCHAR',
				'constraint'     => '200',
			],
		]);
		$this->forge->addKey('id_wisata', TRUE);
		$this->forge->createTable('wisata');
	}


	public function down()
	{
		//
	}
}
