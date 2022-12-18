<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class Achievement extends BaseController
{
	public function index()
	{
		$model3 = new  NewsModel();
		$achievement= $model3->getAchievement();
		$data['judul'] ='Wajah Plastik&trade;';
		
		$data['achievement'] =($achievement);

		echo view('achievement',$data);
	}
}
