<?php
declare(strict_types=1);

class DocsController
{
    public function index(): string
    {
        return view('docs', [
            'title' => 'Documentation OmniverseCORE',
        ]);
    }
}
