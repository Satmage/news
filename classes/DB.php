<?php

class DB 
{
	public function __construct() 
	{
		mysql_connect('localhost', 'root', '');
		mysql_select_db('gallery');
	}
}