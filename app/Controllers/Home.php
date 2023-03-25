<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Toko Online'
        ];
        return view('welcome_message', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | Toko Online'
        ];
        return view('Login/login', $data);
    }
    public function keranjang()
    {
        $data = [
            'title' => 'Keranjang | Toko Online'
        ];
        return view('halaman_keranjang', $data);
    }
}
