<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home', [
            'title'   => 'Accueil — OmniverseCORE',
            'message' => 'Bienvenue dans l’univers OmniverseCORE'
        ]);
    }
}
