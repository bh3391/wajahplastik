<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class News extends BaseController
{
	public function index()
	{
		$data['judul'] ="Berita & Publikasi" ;
		echo view('News/_list',$data);
	}
	public function blogView ()
	{
		$data['judul'] ="Blog | Wajahplastik&trade;" ;
		return view('News/_blogview',$data);
	}

	// Admin Akses
	
}
