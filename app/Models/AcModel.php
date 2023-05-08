<?php

namespace App\Models;

use CodeIgniter\Model;

class AcModel extends Model
{

    protected $table            = 'ac';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas','id_ruangan', 'serial_number', 'brand_ac', 'gambar_ac', 'kondisi_ac',];
}
