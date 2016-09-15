<?php

require __DIR__ . '/../classes/DB.php';

$db = new DB();
$items = $db->query('SELECT * FROM news');
echo "<pre>";
var_dump($items);
echo "</pre>";