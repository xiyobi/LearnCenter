<?php

namespace App\Http\Controllers\WEB;


use App\Models\Admin;
use App\Http\Middleware\RoleMiddleware;





class AdminController
{
    public function __construct()
    {
        RoleMiddleware::check('admin');
    }


    public function courses():void
    {
        view('admin/dashboard/courses');
    }
    public function students():void
    {
        view('admin/dashboard/students');
    }
    public function settings():void
    {
        view('admin/dashboard/settings');
    }
    public function videos():void
    {
        view('admin/dashboard/videos');
    }
     public function logout():void
        {
            view('admin/dashboard/logout');
        }


}