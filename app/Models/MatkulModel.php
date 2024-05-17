<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_matkul', 'nama_matkul', 'id_dosen'];
    protected $returnType       = 'array';

}
