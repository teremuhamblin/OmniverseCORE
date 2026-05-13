<?php
declare(strict_types=1);

function getRoutes(): array
{
    return [
        '/'        => ['HomeController', 'index'],
        '/docs'    => ['DocsController', 'index'],
        '/about'   => ['HomeController', 'about'],
    ];
}
