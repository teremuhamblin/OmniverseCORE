<?php

declare(strict_types=1);

define('APP_NAME', 'OmniverseCORE');
define('APP_ENV', 'development');
define('APP_DEBUG', true);
define('APP_BASE_PATH', dirname(__DIR__));

ini_set('display_errors', APP_DEBUG ? '1' : '0');
error_reporting(E_ALL);

require_once __DIR__ . '/core/Helpers.php';
