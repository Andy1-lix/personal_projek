<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kasir extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kasir | Admin',
            'Judul' => 'Kasir ',
            'menu' => 'MasterData',

        ];
        return view('admin/sidebar/kasir/v_kasir', $data);
    }

}
