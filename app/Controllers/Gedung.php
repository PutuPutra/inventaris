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

            'nama_gedung' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
        ]);

        if (!$validate) {
            return redirect()->to('tambahGedung')->withInput();
        }
        $data = [
            'nama_gedung' => $this->request->getPost('nama_gedung'),
        ];
        $insert = (new GedungModel())->insert($data);
        if ($insert) {
            session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('gedung'));
        }
    }
    public function updateGedung($id)
    {
        if (!$this->validate([
            'nama_gedung' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
        ])) {
            return redirect()->to('gedung' . $id);
        }

        $gedung = new GedungModel();
        $data = [
            'nama_gedung' => $this->request->getPost('nama_gedung'),
        ];
        $gedung->update($id, $data);

        return redirect()->to(base_url('gedung'));
    }
    public function deleted($id = false)
    {
        $gedung = new GedungModel();
        $gedung->where('id', $id);
        $gedung->delete($id);
        return redirect()->to(base_url('/gedung'));
    }
}
