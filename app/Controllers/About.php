<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
	public function index()
	{
		
		$data['judul'] ='Wajah Plastik&trade;';
		echo view('about',$data);
	

	}
}
