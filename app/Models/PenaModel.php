<?php

namespace App\Models;

use CodeIgniter\Model;

class PenaModel extends Model
{

    protected $table            = 'pena ';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['serial_number','id_kelas','merk_pena', 'gambar_pena', 'kondisi_pena'];
}
