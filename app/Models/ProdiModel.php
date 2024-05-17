<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_prodi', 'nama_prodi', 'id_fakultas'];
    protected $returnType       = 'array';

}
