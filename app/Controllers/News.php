<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class News extends BaseController
{
	public function index()
	{
		
		$model = new NewsModel();
		$News = $model->getNews();
		$data = [
			'judul' => 'Berita dan Publikasi',
			
			'News' => ($News)
		];
		echo view('News/_list',$data);
	}
	public function blogView ()
	{
		$data['judul'] ="Blog | Wajahplastik&trade;" ;
		return view('News/_blogview',$data);
	}

	// Admin Akses
	
}
