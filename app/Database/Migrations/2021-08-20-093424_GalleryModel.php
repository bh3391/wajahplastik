<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GalleryModel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'gallery_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'gallery_judul'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'gallery_deskripsi'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			
			'gallery_harga'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				
			],
			'gallery_kategori'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'gallery_sertifikatid'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'gallery_sertifikatlengkap'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'gallery_image' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null'=>true,
			],
			'created_date datetime default current_timestamp',
			'updated_date datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addKey('gallery_id', true);
		$this->forge->createTable('gallery');
	}

	public function down()
	{

		$this->forge->dropTable('gallery');
	}
}
