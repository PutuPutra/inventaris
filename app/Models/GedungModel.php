<?php

namespace App\Models;

use CodeIgniter\Model;

class GedungModel extends Model
{

    protected $table            = 'ac';
    protected $primaryKey       = 'id_gedung';
    protected $returnType       = 'object';
    protected $allowedFields = ['nama_gedung', 'gambar_gedung'];
}
