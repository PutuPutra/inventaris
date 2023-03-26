<?php

namespace App\Models;

use CodeIgniter\Model;

class TiraiModel extends Model
{

    protected $table            = 'ac';
    protected $primaryKey       = 'id_tirai';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas', 'serial_number', 'gambar_tirai', 'kondisi_tirai',];
}
