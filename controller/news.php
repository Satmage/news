<?php

require_once __DIR__ . '/../classes/DB.php';

class News 
{
	public $id;
	public $title;
	public $text;

	public function getAll()
	{
		$db = new DB();
	}
} 