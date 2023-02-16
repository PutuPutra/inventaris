<?php

namespace App\Models;

use CodeIgniter\Model;

class AcModel extends Model
{

    protected $table            = 'ac';
    protected $primaryKey       = 'id_ac';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas', 'serial_nmumber', 'brand_ac', 'gambar_ac', 'kondisi_ac',];
}
