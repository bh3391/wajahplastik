<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\NewsModel;
use App\Models\YoutubeModel;


class Home extends BaseController

{
	public function index()
	{	$model1 = new YoutubeModel();
		$model2 = new  GalleryModel();
		$model3 = new  NewsModel();
		$achievement= $model3->getAchievement();
		$tematik = $model2->getTematik();
		$youtube = $model1->getYoutube();
		$news = $model3->getTitle();
		$data['judul'] ='Wajah Plastik&trade;';
		$data['youtube'] =($youtube);
		$data['news'] =($news);
		$data['tematik'] =($tematik); 
		$data['achievement'] =$achievement;

		echo view('home',$data);
	}

	

	
}
