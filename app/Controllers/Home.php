<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        return view('Login/login');
    }
    public function keranjang()
    {
        return view('halaman_keranjang');
    }
}
