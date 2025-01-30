<?php

namespace App\Http\Controllers\WEB;

class UserController
{
    public function course():void
    {
        view('dashboard/course');
    }
    public function payments():void
    {
        view('dashboard/payments');
    }
    public function teachers():void
    {
        view('dashboard/teachers');
    }
    public function videos():void
    {
        view('dashboard/videos');
    }
    public function wallet():void
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


}