<?php

require __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/classes/var_dump.php';
require __DIR__ . '/models/news.php';

/*$db = new DB();
$items = $db->query('SELECT * FROM news');*/
$items = new News();
$items->getAll();
wtf($items);

