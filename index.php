<?php

require_once __DIR__ . '/classes/var_dump.php';
require __DIR__ . '/models/news.php';

$items = News::getAll();
wtf($items);

