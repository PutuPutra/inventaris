<?php

namespace App\Models;

use CodeIgniter\Model;

class SpidolModel extends Model
{

    protected $table            = 'spidol ';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['merk_spidol', 'gambar_spidol', 'kondisi_spidol', 'warna_spidol'];
}
