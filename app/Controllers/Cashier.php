<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cashier extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kasir | Admin',
            'judul' => 'Kasir',
            'menu' => 'MasterData',

        ];
        return view('admin/sidebar/cashier/v_cashier', $data);
    }
}
