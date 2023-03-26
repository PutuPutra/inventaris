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
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => 'open active',
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => 'active',
            'sub2' => null,
            'kelas' => (new ModelKelas())->findAll(),

        ];


        return view('admin/prasarana/kelas/index', $data);
    }

    public function tambahKelas()
    {
        $data = [
            'title' => 'Tambah Kelas',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => 'open active',
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => 'active',
            'sub2' => null,
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
        $files->move('assets/dokumen/kelas', $names);
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
    public function updateKelas($id)
    {
        $kelas = new ModelKelas();
        $data = [
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'wali_kelas' => $this->request->getPost('wali_kelas'),
            'ketua_kelas' => $this->request->getPost('ketua_kelas'),
        ];
        if ($this->request->getFile('gambar_kelas')->getName() == '') {

            $kelas->where('id_kelas', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_kelas');
            $names = $files->getName();
            $files->move('assets/dokumen/kelas', $names);
            $data['gambar_kelas'] = $names;
            $kelas->where('id_kelas', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/kelas'));
    }
    public function editKelas($id = false)
    {
        $kelas = new ModelKelas();
        $files_kelas = $kelas->find($id);
        $data = [
            'heading' => 'Edit Data Kelas',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => 'open active',
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => 'active',
            'sub2' => null,
            'files_kelas' => $files_kelas,
        ];

        return view('admin/prasarana/kelas/editKelas', $data);
    }
    public function deleted($id = false)
    {
        $kelas = new ModelKelas();
        $kelas->where('id_kelas', $id);
        $kelas->delete($id);
        return redirect()->to(base_url('/kelas'));
    }
}
