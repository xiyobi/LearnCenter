<?php

use App\Http\Middleware\RoleMiddleware;
use Src\middleware\AuthMiddleware;




return[
    'auth:api'=>AuthMiddleware::class,
//    'auth' => RoleMiddleware::class
];

