<?php

namespace App\Models;

use CodeIgniter\Model;

class PenghapusModel extends Model
{

    protected $table            = 'penghapus ';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['serial_number','id_kelas','merk_penghapus', 'gambar_penghapus', 'kondisi_penghapus'];
}
