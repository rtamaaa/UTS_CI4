<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelMahasiswa extends Migration
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
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['L', 'P'],
            ],
            'id_prodi' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_fakultas' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'semester' => [
                'type' => 'INT',
                'constraint' => 2,
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['aktif', 'nonaktif'],
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
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
