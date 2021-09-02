<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'News';
	protected $primaryKey           = 'News_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'News_id',
		'News_keyword',
		'News_description',
		'News_slug',
		'News_title',
		'News_category',
		'News_date',
		'News_writer',
		'News_editor',
		'News_image',
		'News_content',
		'News_source',
		'News_tags',
		'News_status',
		'created_date',
		'updated_date'
	];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];


	public function __construct()
	{
		parent::__construct();
	}
	public function getNews()
	{
		return $this->findAll();
	}

	public function addNews($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}
}
