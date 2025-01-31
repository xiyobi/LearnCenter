<?php

namespace App\Http\Controllers\WEB;

class UserController
{
    public function course():void
    {
        view('/user/dashboard/course');
    }
    public function payments():void
    {
        view('/user/dashboard/payments');
    }
    public function teachers():void
    {
        view('user/dashboard/teachers');
    }
    public function videos():void
    {
        view('user/dashboard/videos');
    }
    public function wallet():void
    {
        view('user/dashboard/wallet');
    }
    public function purchases():void
    {
        view('user/dashboard/purchases');
    }
    public function assignments():void
    {
        view('user/dashboard/assignments');
    }


}