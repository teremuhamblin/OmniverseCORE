<?php

use App\Services\SystemService;

return [

    'GET' => [

        '/api/status' => function () {
            return [
                'status'  => 'ok',
                'service' => 'OmniverseCORE API',
                'time'    => date('c')
            ];
        },

        '/api/system/info' => function () {
            return SystemService::getSystemInfo();
        },

    ],

    'POST' => [

        '/api/echo' => function () {
            $input = json_decode(file_get_contents('php://input'), true);
            return [
                'received' => $input,
                'time'     => date('c')
            ];
        },

    ]

];
