<?php

require_once __DIR__ . '/classes/var_dump.php';
require __DIR__ . '/controller/NewsController.php';

$controller = NewsController::actionAll();
