<?php

class View {
    public static function render(string $template, array $data = []) {
        extract($data);
        require __DIR__ . '/../views/layout.php';
    }
}
