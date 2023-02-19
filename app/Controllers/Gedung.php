<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GedungModel;

class Gedung extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Gedung',
            'gedung' => (new GedungModel())->findAll(),

        ];

        return view('admin/prasarana/gedung/gedung', $data);
    }
    public function tambahGedung()
    {
        $data = [
            'title' => 'Tambah Gedung',
        ];
        return view('admin/prasarana/gedung/tambahGedung', $data);
    }
    public function editGedung()
    {
        $data = [
            'title' => 'Edit Gedung',
        ];
        return view('admin/prasarana/gedung/editGedung', $data);
    }
    public function store()
    {
        $validate = $this->validate([

            'gambar_gedung' => [
                'label' => 'gambar_gedung',
                'rules' => 'uploaded[gambar_gedung]|mime_in[gambar_gedung,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahGedung')->withInput();
        }
        $files = $this->request->getFile('gambar_gedung');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/gedung', $names);
        $data = [
            'gambar_gedung' => $names,
            'nama_gedung' => $this->request->getPost('nama_gedung'),
        ];
        $insert = (new GedungModel())->insert($data);
        if ($insert) {
            session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('kelas'));
        }
    }
    public function updateKelas($id)
    {
        $gedung = new GedungModel();
        $data = [
            'nama_gedung' => $this->request->getPost('nama_gedung'),
        ];
        if ($this->request->getFile('gambar_gedung')->getName() == '') {

            $gedung->where('id_gedung', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_gedung');
            $names = $files->getName();
            $files->move('assets/dokumen/gedung', $names);
            $data['gambar_gedung'] = $names;
            $gedung->where('id_gedung', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/kelas'));
    }
}
