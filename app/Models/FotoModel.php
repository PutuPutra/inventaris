<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{

    protected $table            = 'foto ';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['ukuran_foto', 'gambar_foto', 'kondisi_foto'];
}
