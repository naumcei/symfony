<?php

use Symfony\Config\RoutesConfig;

return new RoutesConfig([
    'a' => [
        'path' => '/a',
    ],
    'b' => [
        'path' => '/b',
        'methods' => ['GET'],
    ],
    'when@dev' => new RoutesConfig([
        'c' => [
            'path' => '/c',
        ],
    ]),
    'when@test' => [
        'd' => [
            'path' => '/d',
        ],
    ],
]);
