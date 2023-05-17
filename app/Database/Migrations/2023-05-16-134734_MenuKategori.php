<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);

        $this->forge->addPrimaryKey('id_kategori');
        $this->forge->createTable('kategori');
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
