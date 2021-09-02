<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'News_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'News_keyword'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'News_description'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'News_slug'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'News_title'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			
			'News_date'       => [
				'type'       => 'date',
			
			],
			'News_writer'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'News_editor'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'News_image'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'News_content'       => [
				'type'       => 'text',
				
			],
			'News_source'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'News_tags'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'News_status'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			
			'created_date datetime default current_timestamp',
			'updated_date datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addKey('News_id', true);
		$this->forge->createTable('News');
	}



	public function down()
	{

		$this->forge->dropTable('News');
	}
}
