<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasanbuku extends Migration
{
    public function up()
    {
        $this->forge->addField ([
            'UlasanID' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'UserID' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'Ulasan' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'Rating' => [
                'type' => 'INT',
                'constraint' => '11',
            ],

        ]);
        $this->forge->addKey('UlasanID');
        $this->forge->createTable('ulasanbuku', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('ulasanbuku');
    }
}
