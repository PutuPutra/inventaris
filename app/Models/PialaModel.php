<?php

namespace App\Models;

use CodeIgniter\Model;

class PialaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'piala';
    protected $primaryKey       = 'id_piala';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    
    protected $allowedFields    = [
        'id_piala',
        'nama_piala',
        'tingkat',
        'posisi',
        'tahun',
        'peserta'
    ];
}
