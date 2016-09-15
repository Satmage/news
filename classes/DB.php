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
	public function queryAll($sql,$class = 'stdClass') 
	{
		$res = mysql_query($sql);
		
		if(false === $res) 
		{
			return false;
		}

		$ret = [];
		while ($row = mysql_fetch_object($res,$class)) 
		{
			$ret[] = $row;
		}

		return $ret;
	}

	public function queryOne($sql,$class = 'stdClass') 
	{
		return $this->queryAll($sql,$class)[0];
	}
}