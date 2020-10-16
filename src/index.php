<?php

// Autoload files using Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

use Screens\Main;
use ApiCalls\Generate;

$method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

if ($method === 'GET') {
    if ($uri === '/') {
        echo json_encode(Main::render());
    }
} else if ($method === 'POST') {
    if ($uri === '/generate') {
        echo json_encode(Generate::call());
    }
}
