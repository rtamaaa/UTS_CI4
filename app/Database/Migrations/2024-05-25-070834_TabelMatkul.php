<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelMatkul extends Migration
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
            'kode_matkul' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'nama_matkul' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_dosen' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
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
        $this->forge->addForeignKey('id_dosen', 'dosen', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('matkul');
    }

    public function down()
    {
        $this->forge->dropTable('matkul');
    }
}
