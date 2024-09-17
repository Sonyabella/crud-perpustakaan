<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoribukuRelasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriBukuID' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'KategoriID' => [
                'type' => 'INT',
                'constraint' => '11',
            ]
        ]);
        $this->forge->addKey('KategoriBukuID');
        $this->forge->createTable('kategoribuku_relasi', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kategoribuku_relasi');
    }
}

