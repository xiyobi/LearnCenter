<?php

namespace App\Http\Controllers\WEB;

use App\Http\Middleware\RoleMiddleware;

use App\Models\Teacher;


class TeacherController
{
    public function __construct()
    {
        RoleMiddleware::check('teacher');
    }
    public function assignments():void
    {
        view('teacher/dashboard/assignments');
    }
    public function groups():void
    {
        view('teacher/dashboard/groups');
    }public function homework():void
    {
        view('teacher/dashboard/homework');
    }
    public function videos():void
    {
        view('teacher/dashboard/videos');
    }
    public function students():void
    {
        view('teacher/dashboard/students');
    }
    public function add_videos():void
    {
        view('teacher/dashboard/add_videos');
    }
    public function logout():void
    {
        view('teacher/dashboard/logout');
    }





}