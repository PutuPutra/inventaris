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
    public function store()
    {
        $validate = $this->validate([

            'gambar_kelas' => [
                'label' => 'gambar_kelas',
                'rules' => 'uploaded[gambar_kelas]|mime_in[gambar_kelas,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahKelas')->withInput();
        }
        $files = $this->request->getFile('gambar_kelas');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/foto/kelas', $names);
        $data = [
            'gambar_kelas' => $names,
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'wali_kelas' => $this->request->getPost('wali_kelas'),
            'ketua_kelas' => $this->request->getPost('ketua_kelas'),
        ];
        $insert = (new ModelKelas())->insert($data);
        if ($insert) {
            session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('kelas'));
        }
    }
}
