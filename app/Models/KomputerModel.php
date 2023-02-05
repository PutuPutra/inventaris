<?php

namespace App\Models;

use CodeIgniter\Model;

class KomputerModel extends Model
{

    protected $table            = 'komputer';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas','serial_nmumber','brand_komputer', 'gambar_komputer', 'kondisi_komputer', 'spesifikasi_komputer', 'jenis_produk_komputer'];
}
