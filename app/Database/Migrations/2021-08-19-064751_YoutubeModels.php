<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class YoutubeModels extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'youtube_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'youtube_link'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			]
			
		]);
		$this->forge->addKey('youtube_id', true);
		$this->forge->createTable('youtube');
	}

	public function down()
	{

		$this->forge->dropTable('youtube');
	}
}
