<?php

namespace App\Models;

use CodeIgniter\Model;

class RuanganModel extends Model
{

    protected $table            = 'ruangan';
    protected $primaryKey       = 'id_ruangan';
    protected $returnType       = 'object';
    protected $allowedFields = ['nama_ruangan', 'gambar_ruangan', 'nama_ruangan', 'kepala_ruangan'];
}
