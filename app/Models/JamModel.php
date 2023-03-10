<?php

namespace App\Models;

use CodeIgniter\Model;

class JamModel extends Model
{

    protected $table            = 'jam';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas', 'serial_number', 'gambar_jam', 'kondisi_jam',];
}
