<?php

namespace App\Models;

use CodeIgniter\Model;

class KursiModel extends Model
{

    protected $table            = 'kursi';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['ukuran_kursi', 'gambar_kursi', 'kondisi_kursi'];
}
