<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nim', 'nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'id_prodi', 'id_fakultas', 'semester', 'alamat', 'status'];
    protected $returnType       = 'array';

}
