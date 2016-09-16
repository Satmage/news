<?php

abstract class AbstractModel 
{

	protected static $table = 'foobar'; 

	public static function getAll()
	{
		$db = new DB();
		return $db->queryAll('SELECT * FROM '.static::$table, 'News');
	}
}