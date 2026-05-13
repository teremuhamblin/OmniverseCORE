<?php

namespace App\Core;

function asset(string $path): string
{
    return '/assets/' . ltrim($path, '/');
}

function route(string $path): string
{
    return $path === '/' ? '/' : '/' . ltrim($path, '/');
}
