<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use App\Models\YoutubeModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$session = session();
		$data['judul'] = 'Dashboard';
		$data['user'] = "Agoes Djanar";
		$data['breadcrumb'] = "";
		echo view('Admin/_dashboard', $data);
		$session;
	}
	public function blogList()
	{
		$data['judul'] = 'Dashboard | Your Blog';
		$data['user'] = "Agoes Djanar";
		$data['breadcrumb'] = " / List Blog Kamu";
		return view('News/_bloglistadmin', $data);
	}
	public function blogEdit()
	{
		$data['judul'] = 'Dashboard | Edit blog';
		$data['user'] = "Agoes Djanar";
		$data['breadcrumb'] = "  / Update Blog";
		return view('News/_blogedit', $data);
	}
	public function blogAdd()
	{
		$data['judul'] = 'Dashboard| Add Blog';
		$data['user'] = "Agoes Djanar";
		$data['breadcrumb'] = " / Tambahkan Blog";
		return view('News/_blogadd', $data);
	}
	public function blogSave()
	{
		$data['judul'] = 'Dashboard| Add Blog';
		$data['user'] = "Agoes Djanar";
		$data['breadcrumb'] = " / Tambahkan Blog";
		return view('News/_blogadd', $data);
	}
	public function blogDelete()
	{
	// $data['judul'] = 'Dashboard| Delete Blog';
		// $data['user'] = "Agoes Djanar";
		// $data['breadcrumb'] =" / Hapus Blog";
		echo '(Blog Telah Dihapus )';
	}




	public function youtubeAdmin()
	{
		$model = new YoutubeModel();

		$youtube = $model->getYoutube();

		$data = [
			'judul' => 'Dashboard | Your Videos',
			'user' => "Agoes Djanar",
			'breadcrumb' => " / Youtube	",
			'youtube' => ($youtube)
		];

		// DD($data);
		echo view('Youtube/_youtubeadmin', $data);
	}

	public function youtubeAdd()
	{
		$session = session();
		$model = new YoutubeModel();
		$data = array(
			'youtube_link'  => $this->request->getPost('youtube_link'),
		);
		$model->SimpanYoutube($data);
		if ($data == !null) {
			$session->setFlashdata('msg', 'Video Berhasil Ditambahkan');
			return redirect()->to('/dashboard/youtubeAdmin');
		} else {
			$session->setFlashdata('err', '*link yang anda masukan salah');
			return redirect()->to('/dashboard/youtubeAdmin');
		}
	}

	public function youtubeDelete($id)
	{

		$session = session();
		$model = new YoutubeModel();
		$model->HapusYoutube($id);
		$session->setFlashdata('Hapus', "Video Berhasil Dihapus");
		return redirect()->to('/dashboard/youtubeAdmin');
	}

	// Section Galery

	public function galleryList()
	{
		$model = new GalleryModel();
		$gallery = $model->adminGallery();
		$data = [
			'judul' => 'Dashboard | Your Gallery',
			'user' => "Agoes Djanar",
			'breadcrumb' => " / Gallery	",
			'gallery' => ($gallery)
		];
		return view('Gallery/_gallerylist', $data);
	}
	//Admin Akses
	public function galleryEdit($id)
	{
		// $session=session();	


		$model = new GalleryModel(); //Mengkoneksikan Dengan Gallery Model

		$gallery = $model->PilihGalery($id)->getRow();
		$data['gallery'] = ($gallery);
		$data['judul'] = 'Dashboard | Your Gallery';
		$data['user'] = "Agoes Djanar";
		$data['breadcrumb'] = " / Gallery	";

		return view('Gallery/_galleryedit', $data);
	}

	public function updateGallery()
	{   $session= session();
		$model = new GalleryModel();
		if ($this->request->getMethod() !== 'post') {
			return redirect()->to('dashboard');
		}
		$id = $this->request->getPost('gallery_id');
		
		$validation = $this->validate([
			'gallery_image' =>
			'uploaded[gallery_image]|mime_in[gallery_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[gallery_image,2000]'
		]); // Memvalidasi Gambar yang di upload
		
		if ($validation == FALSE) {
			$data = array(
				'gallery_judul'  => $this->request->getPost('gallery_judul'),
				'gallery_deskripsi' => $this->request->getPost('gallery_deskripsi'),
				'gallery_harga' => $this->request->getPost('gallery_harga'),
				'gallery_kategori' => $this->request->getPost('gallery_kategori'),
				'gallery_sertifikatid' => $this->request->getPost('gallery_sertifikatid'),
				'gallery_sertilengkap' => $this->request->getPost('gallery_sertilengkap')
			);
		} else {
			
			$path = '../public/assets/images';
			$gambar=$this->request->getFile('gallery_image'); 
			@unlink($path, $gambar);
			
			$upload = $this->request->getFile('gallery_image');
			$filename = $upload->getName();

			$upload->move(WRITEPATH . '../public/assets/images/');
			$data = array(
				'gallery_judul'  => $this->request->getPost('gallery_judul'),
				'gallery_deskripsi' => $this->request->getPost('gallery_deskripsi'),
				'gallery_harga' => $this->request->getPost('gallery_harga'),
				'gallery_kategori' => $this->request->getPost('gallery_kategori'),
				'gallery_sertifikatid' => $this->request->getPost('gallery_sertifikatid'),
				'gallery_sertilengkap' => $this->request->getPost('gallery_sertilengkap'),
				'gallery_image' => $filename
			);
		}

		$model->editGallery($id,$data);
		
		if ($model == TRUE) {
			$session->setFlashdata('Update', 'Wajah Plastik Berhasil Diupdate');
			return redirect()->to('/dashboard/galleryList');
		} else {
			$session->setFlashdata('err', '*link yang anda masukan salah');
			return redirect()->to('/dashboard/galleryList');
		}
	;
	}


	public function galleryAdd()
	{
		$session = session();
		$model = new GalleryModel(); //Mengkoneksikan Dengan Gallery Model
		if ($this->request->getMethod() !== 'post') {
			return redirect()->to('/dashboard/galleryList');
		}
		$validation = $this->validate([
			'gallery_image' =>
			'uploaded[gallery_image]|mime_in[gallery_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[gallery_image,2000]'
		]); // Memvalidasi Gambar yang di upload

		if ($validation == FALSE) {
			$data = array(
				'gallery_judul'  => $this->request->getPost('gallery_judul'),
				'gallery_deskripsi' => $this->request->getPost('gallery_deskripsi'),
				'gallery_harga' => $this->request->getPost('gallery_harga'),
				'gallery_kategori' => $this->request->getPost('gallery_kategori'),
				'gallery_sertifikatid' => $this->request->getPost('gallery_sertifikatid'),
				'gallery_sertlengkap' => $this->request->getPost('gallery_sertilengkap')
			);
		} else {
			$upload = $this->request->getFile('gallery_image');
			$filename = $upload->getName();

			$upload->move(WRITEPATH . '../public/assets/images/');

			$data = array(
				'gallery_judul'  => $this->request->getPost('gallery_judul'),
				'gallery_deskripsi' => $this->request->getPost('gallery_deskripsi'),
				'gallery_harga' => $this->request->getPost('gallery_harga'),
				'gallery_kategori' => $this->request->getPost('gallery_kategori'),
				'gallery_sertifikatid' => $this->request->getPost('gallery_sertifikatid'),
				'gallery_sertilengkap' => $this->request->getPost('gallery_sertilengkap'),
				'gallery_image' => $filename
			);
		}

		$model->addGallery($data);
		if ($data == !null) {
			$session->setFlashdata('Berhasil', 'Wajah Plastik Berhasil Ditambahkan');
			return redirect()->to('/dashboard/galleryList');
		} else {
			$session->setFlashdata('err', '*link yang anda masukan salah');
			return redirect()->to('/dashboard/galleryList');
		}
	}
	public function galleryDelete($id)
	{
		$session = session();
		$model = new GalleryModel();

		$model->HapusGallery($id);
		$session->setFlashdata('Hapus', "Video Berhasil Dihapus");
		return redirect()->to('dashboard/galleryList');
	}
}
