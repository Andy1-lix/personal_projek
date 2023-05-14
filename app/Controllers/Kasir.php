<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kasir extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Kasir',
            'Judul' => 'Dashboard ',
            'menu' => 'MasterData',

        ];
        return view('admin/sidebar/kasir/v_kasir', $data);
    }
}
