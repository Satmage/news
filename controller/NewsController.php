<?php

require __DIR__ . '/../models/news.php';

class NewsController 
{
	public static function actionAll() 
	{
		$items = News::getAll();
		include __DIR__ . '/../views/news/all.php';
	}

	public static function actionOne()
	{	
		echo "ActionOne";
		die;
		$id = $_GET['id'];
		$items = News::getOne();
		include __DIR__ . '/../views/news/one.php';
	}
}