<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\PontuadorController;

$controller = new PontuadorController();
$controller->index();
