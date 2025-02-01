<?php

namespace App\Http\Controllers\WEB;

use App\Http\Middleware\RoleMiddleware;

class UserController
{
    public function __construct()
    {
        RoleMiddleware::check('user');
    }
    public function course():void
    {
        view('user/dashboard/course');
    }

    public function teachers():void
    {
        view('user/dashboard/teachers');
    }
    public function videos():void
    {
        view('user/dashboard/videos');
    }

    public function purchases():void
    {
        view('user/dashboard/purchases');
    }
    public function assignments():void
    {
        view('user/dashboard/assignments');
    }
    public function homework():void
    {
        view('user/dashboard/homework');
    }
    public function logout():void
    {
        view('user/dashboard/logout');
    }



}