<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\ModelKelas;
use App\Models\RuanganModel;

class KomputerModel extends Model
{

    protected $table            = 'komputer';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['id_kelas', 'serial_number', 'brand_komputer', 'gambar_komputer', 'kondisi_komputer', 'spesifikasi_komputer', 'tipe'];

    public function kelas()
    {
        return $this->belongsTo(ModelKelas::class, 'id_kelas', 'nama_kelas', 'wali_kelas', 'ketua_kelas', 'gambar_kelas',);
    }
    // definisi relasi dengan tabel ruangan
    public function ruangan()
    {
        return $this->belongsTo(RuanganModel::class, 'id_ruangan', 'nama_ruangan', 'kepala_ruangan', 'gambar_ruangan',);
    }
}
