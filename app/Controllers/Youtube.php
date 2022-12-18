<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\YoutubeModel;

class Youtube extends BaseController
{
	public function index()
	{
		
		$model = new YoutubeModel();

		$youtube = $model->getYoutube();

		$data = [
			'judul' => 'Youtube | Made Oplas',
			'youtube' => ($youtube)
		];
		echo view('Youtube/_youtubelist',$data);
	}
	
		
}
