<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'BukuID' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'Judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Penulis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Tahun_terbit' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('BukuID');
        $this->forge->createTable('buku', TRUE);

    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
