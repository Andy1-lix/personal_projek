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

    public function tambahMenu()
    {
        $data = [
            'title' => 'Menu | Admin',
            'menu' => 'MasterData',
            'validation' => \Config\Services::validation()

        ];
        return view('admin/sidebar/menu/v_tambahMenu', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]',
            'stock' => 'required|numeric'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/products/create')->withInput()->with('validation', $validation);
        } else {
            $gambar = $this->request->getFile('gambar');
            $gambar->move('uploads');
            $data = [
                'nama_produk' => $this->request->getVar('nama_produk'),
                'harga' => $this->request->getVar('harga'),
                'gambar' => $gambar->getName(),
                'stock' => $this->request->getVar('stock')
            ];
            $this->MenuModel->save($data);
            return redirect()->to('/admin/menu1');
        }
    }
    
    

    public function deleteProduct($id_produk)
    {
        $this->MenuModel->Delete($id_produk);
        return redirect()->to('/admin/menu1');
    }
}
