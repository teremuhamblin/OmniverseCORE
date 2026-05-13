<?php

use App\Controllers\HomeController;
use App\Controllers\DocsController;
use App\Controllers\ApiController;

/** @var \App\Core\Router $router */

$router->get('/', [HomeController::class, 'index']);
$router->get('/docs', [DocsController::class, 'index']);

// API simple
$router->get('/api/status', [ApiController::class, 'status']);
