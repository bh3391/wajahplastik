<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class News extends BaseController
{
	public function index()
	{
		
		$model = new NewsModel();
		$News = $model->getPublish();
		$data = [
			'judul' => 'Berita dan Publikasi',
			
			'News' => ($News)
		];
		echo view('News/_list',$data);
	}
	public function artikel($id)

	{
		$model = new NewsModel();
		$data ['judul']= 'Wajah Plastik&trade: ';
		
		$News= $model->PilihNews($id)->getRow(); 
		
		$data['News']= $News;
		echo view('News/_blogview',$data);
		
	}

	// Admin Akses
	
}
