<?php

namespace App\Controllers;

use App\Models\PenaModel;
use App\Models\ModelKelas;
use App\Controllers\BaseController;

class penaController extends BaseController
{
    public function pena()
    {
        $pena = new PenaModel();
        $files_pena = $pena->findAll();
        $data = [
            'files_pena' => $files_pena,
            'heading' => 'Pena',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => 'active',
            'submenu10' => null,
        ];
        return view('admin/sarana/pena/filePena', $data);
    }
    public function tambahPena()
    {
        $data = [
            'heading' => 'Tambah Data Pena',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => 'active',
            'submenu10' => null,
            'kelas' => (new ModelKelas())->findAll(),
        ];
        return view('admin/sarana/pena/tambahPena', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'merk_pena' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_pena' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_pena' => [
                'label' => 'gambar_pena',
                'rules' => 'uploaded[gambar_pena]|mime_in[gambar_pena,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum pilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahPena')->withInput();
        }
        $files = $this->request->getFile('gambar_pena');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/pena', $names);
        $data = [
            'serial_number' => $this->request->getPost('serial_number'),
            'id_kelas' => $this->request->getPost('id_kelas'),
            'gambar_pena' => $names,
            'merk_pena' => $this->request->getPost('merk_pena'),
            'kondisi_pena' => $this->request->getPost('kondisi_pena')
        ];
        $pena = new PenaModel();
        $pena->insert($data);

        return redirect()->to(base_url('pena'));
    }
    public function deleted($id = false)
    {
        $pena = new PenaModel();
        $pena->where('id', $id);
        $pena->delete($id);
        return redirect()->to(base_url('/pena'));
    }

    public function updatePena($id)
    {
        $pena = new PenaModel();
        $data = [
            'merk_pena' => $this->request->getPost('merk_pena'),
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_pena' => $this->request->getPost('kondisi_pena'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        if ($this->request->getFile('gambar_pena')->getName() == '') {

            $pena->where('id', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_pena');
            $names = $files->getName();
            $files->move('assets/pena', $names);
            $data['gambar_pena'] = $names;
            $pena->where('id', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/pena'));
    }

    public function editPena($id = false)
    {
        $pena = new PenaModel();
        $files_pena = $pena->find($id);
        $data = [
            'heading' => 'Edit Data Pena',
            'files_pena' => $files_pena,
            'kelas' => (new ModelKelas())->findAll(),
        ];

        return view('admin/sarana/pena/editPena', $data);
    }
}
