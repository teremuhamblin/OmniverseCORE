<?php

namespace App\Core;

abstract class Controller
{
    protected function view(string $template, array $data = []): void
    {
        View::render($template, $data);
    }

    protected function json(array $data, int $status = 200): void
    {
        Response::json($data, $status);
    }
}
