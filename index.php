<?php

require_once __DIR__ . '/classes/var_dump.php';
require __DIR__ . '/models/news.php';


$items = News::getAll();

include __DIR__ . '/views/index.php';

