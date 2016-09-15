<?php

require __DIR__ . '/../models/news.php';

class NewsController 
{
	public static function actionAll() 
	{
		$items = News::getAll();
		include __DIR__ . '/../views/index.php';
	}

	public static function actionOne()
	{
		$id = $_GET['id'];
		$items = News::getOne();
		include __DIR__ . '/../views/index.php';
	}
}