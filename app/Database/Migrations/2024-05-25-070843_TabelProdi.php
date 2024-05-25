<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelProdi extends Migration
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
            'kode_prodi' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'nama_prodi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'id_fakultas' => [
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
        $this->forge->addForeignKey('id_fakultas', 'fakultas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('prodi');
    }

    public function down()
    {
        $this->forge->dropTable('prodi');
    }
}
