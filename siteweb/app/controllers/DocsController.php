<?php

namespace App\Controllers;

use App\Core\Controller;

class DocsController extends Controller
{
    public function index(): void
    {
        $this->view('docs', [
            'title'    => 'Documentation — OmniverseCORE',
            'sections' => [
                'Installation',
                'Architecture',
                'API',
                'Plugins',
                'Roadmap'
            ]
        ]);
    }
}
