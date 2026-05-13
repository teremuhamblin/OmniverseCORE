<?php

namespace App\Core;

class View
{
    public static function render(string $template, array $data = []): void
    {
        extract($data);
        $templateFile = __DIR__ . '/../views/' . $template . '.php';
        $layoutFile   = __DIR__ . '/../views/layout.php';

        if (!file_exists($templateFile)) {
            throw new \RuntimeException("Vue introuvable : $templateFile");
        }

        $contentView = $templateFile;
        require $layoutFile;
    }
}
