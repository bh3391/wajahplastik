<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BlogModels extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'blog_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'blog_title'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'blog_slug'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'blog_description' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'blog_img'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'blog_status'       => [
				'type'       => 'ENUM',
				'constraint' => ['published','draft'],
				'default' => 'draft'
			],
		]);
		$this->forge->addKey('blog_id', true);
		$this->forge->createTable('blog');
	}

	public function down()
	{

		$this->forge->dropTable('blog');
	}
}
