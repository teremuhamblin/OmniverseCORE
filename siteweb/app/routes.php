<?php

$router->get('/', [new HomeController, 'index']);
$router->get('/docs', [new DocsController, 'index']);
