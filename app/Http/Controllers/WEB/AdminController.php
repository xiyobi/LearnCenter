<?php

namespace App\Http\Controllers\WEB;


use App\Models\Admin;


class AdminController
{
    public function addStudent():void
    {
        view('admin/dashboard/add_student');
    }
    public function students():void
    {
        view('admin/dashboard/student');
    }public function wallet():void
    {
        view('dashboard/wallet');
    }
    public function purchases():void
    {
        view('dashboard/purchases');
    }
    public function assignments():void
    {
        view('dashboard/assignments');
    }

    public function teachers():void
    {
        view('admin/dashboard/teachers');
    }
    public function videos():void
    {
        view('admin/dashboard/videos');
    }


}