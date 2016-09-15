<?php

class DB 
{
/*
Подключение к БД
*/
	public function __construct() 
	{
		mysql_connect('localhost', 'root', '');
		mysql_select_db('gallery');
		mysql_set_charset('utf8');
	}
/*
Отправка запросов в БД
*/
	public function query($sql) 
	{
		$res = mysql_query($sql);
		
		if(false === $res) 
		{
			return false;
		}

		$ret = [];
		while ($row = mysql_fetch_object($res)) 
		{
			$ret[] = $row;
		}

		return $ret;
	}
}