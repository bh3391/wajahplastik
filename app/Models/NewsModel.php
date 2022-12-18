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
	protected $createdField         = 'created_date';
	protected $updatedField         = 'updated_date';
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
	
	public function getTitle()
	{
		$query = $this->db->query("SELECT news_title,news_slug,news_keyword,news_tags,news_id,news_description,news_image,news_category from News ORDER BY news_id DESC 	LIMIT 10");
		$result = $query->getResultArray();
		return $result;
	}
	
	public function getPublish()
	{
		$query = $this->db->query("SELECT * FROM News where news_status = 'publish'");
		$result = $query->getResultArray();
		return $result;
	}
	public function getAchievement()
	{
		$query = $this->db->query("SELECT * FROM News where news_category = 'achievement' ORDER BY news_id DESC 	LIMIT 9");
		$result = $query->getResultArray();
		return $result;
	}

	public function addNews($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}
	public function updateNews($data,$id)
	{
		$query = $this->db->table($this->table)->update($data, array('News_id' => $id));
		return $query;
	}
	public function deleteNews($id)
	{
		$query = $this->db->table($this->table)->delete(array('News_id' => $id));
		return $query;
	}
	public function PilihNews($id)
	{
		$query = $this->getWhere(['News_slug' => $id]);
		return $query;
	}
	
}
