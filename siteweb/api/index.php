<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/config.php';

use App\Core\Response;

// Charge les routes API
$routes = require __DIR__ . '/routes.php';

$uri = strtok($_SERVER['REQUEST_URI'], '?');
$method = $_SERVER['REQUEST_METHOD'];

// Vérifie si la route existe
if (isset($routes[$method][$uri])) {
    try {
        $handler = $routes[$method][$uri];
        $result = $handler();
        Response::json($result);
    } catch (Throwable $e) {
        Response::json([
            'status' => 'error',
            'message' => APP_DEBUG ? $e->getMessage() : 'Erreur interne API'
        ], 500);
    }
} else {
    Response::json([
        'status' => 'error',
        'message' => 'Endpoint introuvable'
    ], 404);
}
