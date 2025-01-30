<?php

namespace App\Http\Controllers\WEB;


use App\Models\Teacher;


class TeacherController
{
    public function assignments():void
    {
        view('teacher/dashboard/assignments');
    }
    public function groups():void
    {
        view('teacher/dashboard/student');
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



}