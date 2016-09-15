<?php

require __DIR__ . '/../classes/DB.php';
require_once __DIR__ . '/../classes/var_dump.php';

$db = new DB();
$items = $db->query('SELECT * FROM news');
wtf($items);

