<?php

namespace App\Controllers;
use App\Models\YoutubeModel;
class Home extends BaseController

{
	public function index()
	{	$model = new YoutubeModel();

		$youtube = $model->getYoutube();
		$data['judul'] ='Wajah Plastik&trade;';
		$data['youtube'] =($youtube);

		echo view('home',$data);
	}
}
