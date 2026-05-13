<?php

namespace App\Controllers;

use App\Core\Controller;

class ApiController extends Controller
{
    public function status(): void
    {
        $this->json([
            'status'  => 'ok',
            'service' => 'OmniverseCORE-site',
            'time'    => date('c')
        ]);
    }
}
