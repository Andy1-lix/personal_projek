<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Transaksi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Transaksi | Admin',
            'Judul' => 'Transaksi',
            'menu' => 'MasterData',

        ];
        return view('admin/sidebar/transaksi/v_transaksi', $data);
    }
}
