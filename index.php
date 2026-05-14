<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\PageController;

$app = new PageController();
$app->render();