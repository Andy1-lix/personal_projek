<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\KategoriModel;

class Kasir extends BaseController
{
    public function __construct()
    {
        $this->MenuModel = new MenuModel();
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kasir | Admin',
            'Judul' => 'Kasir ',
            'menu' => 'MasterData',
            'kategori' => $this->KategoriModel->findAll(),
            'menu1' => $this->MenuModel->findAll(),
            'validation' => \Config\Services::validation()

        ];
        return view('admin/sidebar/kasir/v_kasir', $data);
    }
    public function checkout()
    {
        // Validasi form checkout
        $this->validate(['menu1' => 'required']);

        // Mendapatkan inputan produk yang di-checkout
        $productIds = (array) $this->request->getPost('menu1');

        // Logika checkout
        $total = 0;
        foreach ($productIds as $productId) {
            $product = $this->model->findAll($productId);
            if ($product) {
                // Mengurangi stok produk
                $product['stock'] -= 1;
                $this->model->save($product);

                // Menghitung total harga
                $total += $product['harga'];
            }
        }

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->to('/admin/kasir')->with('success', 'Checkout successful. Total: ' . $total);
    }

}
