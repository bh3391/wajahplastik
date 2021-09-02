<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;

class Gallery extends BaseController
{
	public function index()

	{
		$model = new GalleryModel();
		$gallery = $model->getPersonal();
		$data = [
			"judul" => "Galeri | Wajah Plastik",
			'gallery' => ($gallery)
		];
		echo view('Gallery/_galleryview', $data);
	}
	public function details($id)

	{
		$model = new GalleryModel();
		$data ['judul']= 'Wajah Plastik&trade: ';
		
		$data['gallery'] = $model->PilihGalery($id)->getRow(); 
		// dd($data);
		echo view('Gallery/details',$data);
		
	}

	public function search()
	{	$session = session();
		$model =new GalleryModel();
		$nama = $this->request->getVar('nama');
		$gallery = $model->search($nama);
		
		
		if ($gallery == !null) {
			$session->setFlashdata('Berhasil', 'Wajah Plastik Anda Ditemukan');
			return redirect()->to('Gallery');
		} else {
			$session->setFlashdata('Gagal', 'Data Yang Anda Cari Tidak Ditemukan');
			return redirect()->to('Gallery');
		}
		
	}
}