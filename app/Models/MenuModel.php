<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_produk';
    protected $allowedFields = ['nama_produk', 'harga', 'gambar', 'stock', 'created_at', 'updated_at'];
}
