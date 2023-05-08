<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\ModelKelas;
use App\Models\RuanganModel;

class MejaModel extends Model
{

    protected $table            = 'meja';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['serial_number','ukuran_meja', 'gambar_meja', 'kondisi_meja','id_kelas','jumlah_meja','id_ruangan'];

    // definisi relasi dengan tabel kelas
    public function kelas()
    {
        return $this->belongsTo(ModelKelas::class, 'id_kelas','nama_kelas','wali_kelas','ketua_kelas','gambar_kelas',);
    }
    // definisi relasi dengan tabel ruangan
    public function ruangan()
    {
        return $this->belongsTo(RuanganModel::class, 'id_ruangan','nama_ruangan','kepala_ruangan','gambar_ruangan',);
    }
}

        
        
        