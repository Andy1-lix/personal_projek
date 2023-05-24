<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\KategoriModel;

class Admin extends BaseController
{
    // protected $model;

    public function __construct()
    {

        $this->MenuModel = new MenuModel();
        $this->KategoriModel = new KategoriModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Admin',
            'Judul' => 'Dashboard ',
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
            'judul' => 'Menu Produk',
            'menu' => 'MasterData',
            'kategori' => $this->KategoriModel->findAll(),
            'menu1' => $this->MenuModel->findAll()
        ];
        return view('admin/sidebar/menu1', $data);
    }

    public function tambahMenu()
    {
        $data = [
            'title' => 'Menu | Admin',
            'judul' => 'Tambah Menu',
            'menu' => 'MasterData',
            'kategori' => $this->KategoriModel->findAll(),
            'menu1' => $this->MenuModel->findAll(),
            'validation' => \Config\Services::validation()

        ];
        return view('admin/sidebar/product/v_tambahProduk', $data);
    }


    public function store()
    {
        if (!$this->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]',
            'stock' => 'required|numeric',
            'id_kategori' => 'required'
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
                'stock' => $this->request->getVar('stock'),
                'id_kategori' => $this->request->getVar('id_kategori')
            ];
            $this->MenuModel->save($data);
            return redirect()->to('/admin/menu1')->with('success', 'Product created successfully.');
        }
    }






    public function edit($id_produk)
    {
        $data = [
            'title' => 'Edit Menu | Admin',
            'judul' => 'Edit Menu',
            'bread' => 'edit',
            'menu' => 'MasterData',
            'validation' => \Config\Services::validation(),
            'menuData' => $this->MenuModel->find($id_produk)
        ];

        return view('admin/sidebar/product/v_editProduk', $data);
    }

    public function update($id_produk)
    {
        $product = $this->model->find($id_produk);
        if (empty($product)) {
            return redirect()->to('/products')->with('error', 'Product not found.');
        }

        if (!$this->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'uploaded[gambar]|max_size[gambar,1024]|is_image[gambar]',
            'stock' => 'required|numeric',
            'id_kategori' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/products/edit/' . $id_produk)->withInput()->with('validation', $validation);
        } else {
            $gambar = $this->request->getFile('gambar');
            $gambar->move('uploads');
            $data = [
                'nama_produk' => $this->request->getVar('nama_produk'),
                'harga' => $this->request->getVar('harga'),
                'gambar' => $gambar->getName(),
                'stock' => $this->request->getVar('stock'),
                'id_kategori' => $this->request->getVar('id_kategori')
            ];
            $this->MenuModel->update($id_produk, $data);
            return redirect()->to('/products')->with('success', 'Product updated successfully.');
        }
    }


    public function deleteProduct($id_produk)
    {
        $product = $this->MenuModel->find($id_produk);
        $gambar = $product['gambar'];
        unlink('uploads/' . $gambar);
        

        if (empty($product)) {
            return redirect()->to('/admin/menu1')->with('error', 'Product not found.');
        }
        $this->MenuModel->delete($id_produk);
        return redirect()->to('/admin/menu1')->with('success', 'Product deleted successfully.');
    }
    // $this->MenuModel->Delete($id_produk);
    // return redirect()->to('/admin/menu1');

}
