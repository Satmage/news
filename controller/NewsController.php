<?php

require __DIR__ . '/../models/news.php';

class NewsController 
{
	public static function actionAll() 
	{
		$items = News::getAll();
		include __DIR__ . '/../views/index.php';
	}
}