<?php
declare(strict_types=1);

class HomeController
{
    public function index(): string
    {
        return view('home', [
            'title' => 'OmniverseCORE',
            'subtitle' => 'Core engine, modules & omniversal tooling',
        ]);
    }

    public function about(): string
    {
        return view('home', [
            'title' => 'À propos d’OmniverseCORE',
            'subtitle' => 'Vision, architecture et roadmap',
        ]);
    }
}
