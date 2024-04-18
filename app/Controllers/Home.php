<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function about(): string
    {
        return "Ini adalah halaman tentang kami.";
    }

    public function contact(): string
    {
        return "Ini adalah halaman kontak kami.";
    }
}
