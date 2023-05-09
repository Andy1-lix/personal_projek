<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_user_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin'            => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email'         => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at'    => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at'    => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
