<?php

namespace App\Http\Controllers\WEB;


use JetBrains\PhpStorm\NoReturn;

class HomeController
{
    public function home(): void
    {
        view("home");
    }
    public function about(): void
    {
        view("about");
    }
    public function login(): void
    {
        view("auth/login");
    }
    public function register(): void
    {
        view("auth/register");
    }
    public function product_card(): void
    {
        view("product-card");
    }
   public function contacts(): void
    {
        view("contacts");
    }
   public function news(): void
    {
        view("news");
    }
    public function teachers(): void
    {
        view("teachers");
    }
    public function teams(): void
    {
        view("teams");
    }

}