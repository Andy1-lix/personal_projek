<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'stock' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                
            ],
            'create_at' => [
                'type'       => 'TIMESTAMP',
                'null'       => true,
            ],
            'update_at' => [
                'type'       => 'TIMESTAMP',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_produk', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
