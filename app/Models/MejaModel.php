<?php

namespace App\Models;

use CodeIgniter\Model;

class MejaModel extends Model
{

    protected $table            = 'meja';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['ukuran_meja', 'gambar_meja', 'kondisi_meja'];
}
