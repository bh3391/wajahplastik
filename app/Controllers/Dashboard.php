<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use App\Models\YoutubeModel;
use App\Models\NewsModel;


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
		$model = new NewsModel();
		$News = $model->getNews();
		$data = [
			'judul' => 'Dashboard | Your Blog',
			'user' => "Agoes Djanar",
			'breadcrumb' => " /  Your Blog	",
			'News' => ($News)
		];
		
		return view('News/_bloglistadmin', $data);
	}
	public function blogForm()
	{
		$data['judul'] = 'Dashboard | Tambahkan Blog';
		$data['user'] = "Agoes Djanar";
		$data['breadcrumb'] = " / Tambahkan Blog";
		return view('News/_blogadd', $data);
	}
	public function blogEditform($id)
	{
		$data['judul'] = 'Dashboard | Tambahkan Blog';
		$data['user'] = "Agoes Djanar";
		$data['breadcrumb'] = " / Edit Blog";
		$model = new NewsModel();
		$News = $model->PilihNews($id)->getRow(); 
		$data['News'] = ($News); 
		echo view('News/_blogedit', $data);
	}

	public function blogAdd()
	{

		$session = session();
		$model = new NewsModel();
		$validation = $this->validate([
			'News_image' =>
			'uploaded[News_image]|mime_in[News_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[News_image,1500]'
		]); // Memvalidasi Gambar yang di upload
		$title = $this->request->getPost('News_title');
		$slug = url_title($title, '-', TRUE);
		$content = $this->request->getPost('News_content');
		$description = word_limiter($content,100);
		if ($validation == false) {
			$data = array(

				'News_keyword' => $this->request->getPost('News_keyword'),
				'News_description' => $description,
				'News_slug'  => $slug,
				'News_title' => $this->request->getPost('News_title'),
				'News_date' => $this->request->getPost('News_date'),
				'News_writer' => $this->request->getPost('News_writer'),
				'News_editor'  => $this->request->getPost('News_editor'),
				'News_content' => $this->request->getPost('News_content'),
				'News_source' => $this->request->getPost('News_source'),
				'News_tags' => $this->request->getPost('News_tags'),
				'News_status' => $this->request->getPost('News_status'),
				'News_category' => $this->request->getPost('News_category'),

			);
		} else {
			$upload = $this->request->getFile('News_image');
			$filename = $upload->getName();

			$upload->move(WRITEPATH . '../public/assets/images/');
			$data = array(

				'News_keyword' => $this->request->getPost('News_keyword'),
				'News_description' => $description,
				'News_slug'  => $slug,
				'News_title' => $this->request->getPost('News_title'),
				'News_date' => $this->request->getPost('News_date'),
				'News_writer' => $this->request->getPost('News_writer'),
				'News_editor'  => $this->request->getPost('News_editor'),
				'News_category' => $this->request->getPost('News_category'),
				'News_content' => $this->request->getPost('News_content'),
				'News_source' => $this->request->getPost('News_source'),
				'News_tags' => $this->request->getPost('News_tags'),
				'News_status' => $this->request->getPost('News_status'),
				'News_image' => $filename

			);
		}
		
		$model->addNews($data);
		if ($data == !null) {
			$session->setFlashdata('msg', 'Blog Berhasil Ditambahkan');
			return redirect()->to('/dashboard/bloglist');
		} else {
			$session->setFlashdata('err', '*Data yang anda masukan salah');
			return redirect()->to('/dashboard/bloglist');
		}
	}
	public function blogUpdate()
	{

		$session = session();
		$model = new NewsModel();
		$validation = $this->validate([
			'News_image' =>
			'uploaded[News_image]|mime_in[News_image,image/jpg,image/jpeg,image/gif,image/png]|max_size[News_image,1500]'
		]); // Memvalidasi Gambar yang di upload
		$id = $this->request->getPost('News_id');
		$title = $this->request->getPost('News_title');
		$slug = url_title($title, '-', TRUE);
		$content = $this->request->getPost('News_content');
		$description = substr($content,0,500); 
		if ($validation == false) {
			$data = array(

				'News_keyword' => $this->request->getPost('News_keyword'),
				'News_description' => $description,
				'News_slug'  => $slug,
				'News_title' => $this->request->getPost('News_title'),
				'News_date' => $this->request->getPost('News_date'),
				'News_writer' => $this->request->getPost('News_writer'),
				'News_editor'  => $this->request->getPost('News_editor'),
				'News_content' => $this->request->getPost('News_content'),
				'News_source' => $this->request->getPost('News_source'),
				'News_tags' => $this->request->getPost('News_tags'),
				'News_status' => $this->request->getPost('News_status'),
				'News_category' => $this->request->getPost('News_category'),

			);
		} else {
			$path = '../<?=base_url()?>/assets/images/';
			$gambar = $this->request->getFile('News_image');
			@unlink($path, $gambar);

			
			$upload = $this->request->getFile('News_image');
			$filename = $upload->getName();

			$upload->move(WRITEPATH . '../<?=base_url()?>/assets/images/');
			$data = array(

				'News_keyword' => $this->request->getPost('News_keyword'),
				'News_description' => $description,
				'News_slug'  => $slug,
				'News_title' => $this->request->getPost('News_title'),
				'News_date' => $this->request->getPost('News_date'),
				'News_writer' => $this->request->getPost('News_writer'),
				'News_editor'  => $this->request->getPost('News_editor'),
				'News_category' => $this->request->getPost('News_category'),
				'News_content' => $this->request->getPost('News_content'),
				'News_source' => $this->request->getPost('News_source'),
				'News_tags' => $this->request->getPost('News_tags'),
				'News_status' => $this->request->getPost('News_status'),
				'News_image' => $filename

			);
		}
		
		$model->updateNews($data,$id);
		if ($data == !null) {
			$session->setFlashdata('Update', 'Update Berhasil ');
			return redirect()->to('/dashboard/bloglist');
		} else {
			$session->setFlashdata('err', '*Data yang anda masukan salah');
			return redirect()->to('/dashboard/bloglist');
		}
	}
	public function blogPublish($id)
	{
		$session = session();
		$data = ['News_status' => 'publish']; 
		$model = new NewsModel();
		$model -> update($id,$data);
		$session->setFlashdata('Publish', "Blog Berhasil Di Publish ");
		return redirect()->to('/dashboard/blogList');
		

	}
	public function blogDelete($id)
	{
		$session = session();
		$model = new NewsModel(); 
		$model->deleteNews($id); 
		$session->setFlashdata('Hapus', "Blog Berhasil Dihapus");
		return redirect()->to('/dashboard/blogList');
		
	}
	public function blogPreview($id)
	{
		$model = new NewsModel();
		$data ['judul']= 'Wajah Plastik&trade: ';
		
		$News= $model->PilihNews($id)->getRow(); 
		$data['News']= $News;
		echo view('News/_blogview',$data);
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
	{
		$session = session();
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

			$path = '../<?=base_url()?>/assets/images';
			$gambar = $this->request->getFile('gallery_image');
			@unlink($path, $gambar);

			$upload = $this->request->getFile('gallery_image');
			$filename = $upload->getName();

			$upload->move(WRITEPATH . '../<?=base_url()?>/assets/images/');
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

		$model->editGallery($id, $data);

		if ($model == TRUE) {
			$session->setFlashdata('Update', 'Wajah Plastik Berhasil Diupdate');
			return redirect()->to('/dashboard/galleryList');
		} else {
			$session->setFlashdata('err', '*link yang anda masukan salah');
			return redirect()->to('/dashboard/galleryList');
		};
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
		$title      = $this->request->getPost('gallery_judul');
        $slug       = url_title($title, '-', TRUE);

		if ($validation == FALSE) {
			$data = array(
				'gallery_judul'  => $this->request->getPost('gallery_judul'),
				'gallery_deskripsi' => $this->request->getPost('gallery_deskripsi'),
				'gallery_harga' => $this->request->getPost('gallery_harga'),
				'gallery_kategori' => $this->request->getPost('gallery_kategori'),
				'gallery_sertifikatid' => $this->request->getPost('gallery_sertifikatid'),
				'gallery_sertlengkap' => $this->request->getPost('gallery_sertilengkap'),
				'gallery_slug' => $slug
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
				'gallery_image' => $filename,
				'gallery_slug' => $slug
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
