<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, callable|array $handler): void
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function post(string $path, callable|array $handler): void
    {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $uri = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');

        $handler = $this->routes[$method][$uri] ?? null;

        if (!$handler) {
            Response::html('404 — Page non trouvée', 404);
            return;
        }

        if (is_array($handler)) {
            [$controller, $action] = $handler;
            if (is_string($controller)) {
                $controller = new $controller();
            }
            $controller->$action();
            return;
        }

        $handler();
    }
}
