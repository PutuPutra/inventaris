<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKelas;

class Kelas extends BaseController
{
    
    public function index()
    {
        $data = [
            'title' => 'Kelas',
            'kelas' => (new ModelKelas())->findAll(),

        ];
    

        return view('admin/prasarana/kelas/index', $data);
    }

    public function tambahKelas()
    {
        $data = [
            'title' => 'Tambah Kelas',
        ];
        return view('admin/prasarana/kelas/tambahKelas', $data);
    }
    public function store(){
        $data = [
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'wali_kelas' => $this->request->getPost('wali_kelas'),
            'ketua_kelas' => $this->request->getPost('ketua_kelas'),
        ];
        $insert = (new ModelKelas())->insert($data);
        if($insert){
            session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('kelas'));
        }

    }

    
}
