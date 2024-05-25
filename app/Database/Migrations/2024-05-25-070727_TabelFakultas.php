<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelFakultas extends Migration
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
            'kode_fakultas' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'nama_fakultas' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
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
        $this->forge->createTable('fakultas');
    }

    public function down()
    {
        $this->forge->dropTable('fakultas');
    }
}
