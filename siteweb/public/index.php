<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/config.php';

use App\Core\Router;
use App\Core\Response;

$router = new Router();

// Routes web
require __DIR__ . '/../app/routes.php';

// Dispatch
try {
    $router->dispatch();
} catch (Throwable $e) {
    if (APP_DEBUG) {
        Response::html("Erreur : " . $e->getMessage(), 500);
    } else {
        Response::html("Erreur interne du serveur", 500);
    }
}
