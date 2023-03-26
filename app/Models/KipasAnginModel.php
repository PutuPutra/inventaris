<?php

namespace App\Models;

use CodeIgniter\Model;

class KipasAnginModel extends Model
{

    protected $table            = 'ac';
    protected $primaryKey       = 'id_kipas';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas', 'serial_number', 'gambar_kipas_angin', 'kondisi_kipas_angin',];
}
