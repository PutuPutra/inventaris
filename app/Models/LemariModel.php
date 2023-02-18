<?php

namespace App\Models;

use CodeIgniter\Model;

class LemariModel extends Model
{

    protected $table            = 'ac';
    protected $primaryKey       = 'id_lemari';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas', 'serial_number', 'Ukuran_lemari', 'gambar_lemari', 'kondisi_lemari',];
}
