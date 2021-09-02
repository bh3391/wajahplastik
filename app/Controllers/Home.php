<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['judul'] ='Wajah Plastik&trade;';

		echo view('home',$data);
	}
}
