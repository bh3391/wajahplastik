<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'gallery';
	protected $primaryKey           = 'gallery_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['gallery_judul', 'gallery_id', 'gallery_deskripsi', 'gallery_harga', 'gallery_kategori', 'gallery_image',];

	// Dates
	protected $useTimestamps        = TRUE;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_date';
	protected $updatedField         = 'updated_date';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = ['required'];
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
	public function getGallery()
	{
		return $this->findAll();
	}
	public function getPersonal()
	{
		$query = $this->db->query("SELECT * FROM gallery where gallery_kategori = 'Custom'");
		$result = $query->getResultArray();
		return $result;
	}
	public function getTematik()
	{
		$query = $this->db->query("SELECT * FROM gallery where gallery_kategori = 'tematik'");
		$result = $query->getResultArray();
		return $result;
	}
	public function search($nama)
	{	
		$query = $this->db->query("SELECT * FROM gallery where  gallery_judul = '%".$nama."%' ");
		$result = $query->getResultArray($nama);
		return $result;
	}
	public function PilihGalery($id)
	{
		$query = $this->getWhere(['gallery_slug' => $id]);
		return $query;
	}

	public function addGallery($data)
	{
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}
	public function HapusGallery($id)
	{
		$query = $this->db->table($this->table)->delete(array('gallery_id' => $id));

		return $query;
	}
	public function editGallery($id, $data)
	{
		$query = $this->db->table($this->table)->update($data, array('gallery_id' => $id));
		return $query;
	}

	public function adminGallery()
	{
		$query = $this->builder()
			->select('*')
			->orderBy('updated_date', 'desc');
		return $query->get()->getResultArray();
	}
}
