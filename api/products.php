<?php
require_once __DIR__ . '/../vendor/autoload.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$repo = new \App\ProductRepository();

$fullMenu = [
    'burgers'  => $repo->getBurgers(),
    'fries'    => $repo->getFries(),
    'drinks'   => $repo->getDrinks(),
    'salads'   => $repo->getSalads(),
    'desserts' => $repo->getDesserts(),
    'sauces'   => $repo->getSauces()
];

echo json_encode($fullMenu, JSON_UNESCAPED_UNICODE);