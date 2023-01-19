<?php

namespace App\Models;

use CodeIgniter\Model;

class PapanTulisModel extends Model
{

    protected $table            = 'papan_tulis';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['ukuran_papan_tulis', 'gambar_papan_tulis', 'kondisi_papan_tulis'];
}
