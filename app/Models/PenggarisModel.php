<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggarisModel extends Model
{

    protected $table            = 'penggaris ';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas','merk_penggaris', 'gambar_penggaris', 'kondisi_penggaris', 'panjang_penggaris', 'serial_number'];
}
