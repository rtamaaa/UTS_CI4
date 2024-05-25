<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelDosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_dosen' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'nama_dosen' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('dosen');
    }

    public function down()
    {
        $this->forge->dropTable('dosen');
    }
}
