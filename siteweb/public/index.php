<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/') ?: '/';

$routes = getRoutes();

if (array_key_exists($uri, $routes)) {
    [$controllerClass, $method] = $routes[$uri];
    $controllerFile = __DIR__ . '/../app/controllers/' . $controllerClass . '.php';

    if (file_exists($controllerFile)) {
        require_once $controllerFile;
        $controller = new $controllerClass();
        if (method_exists($controller, $method)) {
            echo $controller->$method();
            exit;
        }
    }
}

http_response_code(404);
echo '404 - Page not found';
