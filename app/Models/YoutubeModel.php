<?php

namespace App\Models;

use CodeIgniter\Model;

class YoutubeModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'youtube';
	protected $primaryKey           = 'youtube_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['youtube_id', 'youtube_link'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'youtube_link' => 'required',

	];
	protected $validationMessages   = [
		'youtube_link' => 'Link Harus Diisi'
	];
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

	//Function
	public function getYoutube()
	{
		$query = $this->builder()
			->select('*')
			->orderBy('youtube_id', 'desc');
		
		return $query->get()->getResultArray();
	}
	public function SimpanYoutube($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}

	public function HapusYoutube($id)
	{
		$query = $this->db->table($this->table)->delete(array('youtube_id' => $id));

		return $query;
	}
}
