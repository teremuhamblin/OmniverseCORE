<?php
declare(strict_types=1);

define('OMNI_APP_NAME', 'OmniverseCORE');
define('OMNI_BASE_URL', '/'); // adapte si le site est dans un sous-dossier

function view(string $template, array $data = []): string
{
    $viewFile = __DIR__ . '/views/' . $template . '.php';
    if (!file_exists($viewFile)) {
        return 'View not found: ' . htmlspecialchars($template);
    }

    extract($data);
    ob_start();
    include __DIR__ . '/views/layout.php';
    return ob_get_clean();
}
