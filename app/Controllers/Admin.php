<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/v_dashboard');
    }
    public function menu()
    {
        return view('admin/sidebar/menu');
    }
}
