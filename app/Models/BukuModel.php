<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{

    protected $table            = 'buku';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['serial_number','penerbit_buku', 'gambar_buku', 'kondisi_buku', 'deskripsi_buku', 'id_kelas'];
}
