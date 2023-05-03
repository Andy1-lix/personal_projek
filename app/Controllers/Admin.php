<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class Admin extends BaseController
{
    protected $model;

    public function __construct()
    {

        $this->MenuModel = new MenuModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Admin',
            'menu' => 'MasterData',

        ];
        return view('admin/v_dashboard', $data);
    }


    public function menu()
    {


        $data = [
            'title' => 'Menu | Admin',
            'menu' => 'MasterData',
            'menu1' => $this->$MenuModel->findAll(),
        ];
        return view('admin/sidebar/menu', $data);
    }

    public function menu1()
    {

        $data = [
            'title' => 'Menu | Admin',
            'menu' => 'MasterData',
            'menu1' => $this->MenuModel->findAll()
        ];
        return view('admin/sidebar/menu1', $data);
    }

    public function deleteProduct($id_produk)
    {
        $this->MenuModel->Delete($id_produk);
        return redirect()->to('/admin/menu1');
    }
}
