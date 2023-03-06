<?php

namespace App\Controllers;

use App\Models\AcModel;
use App\Controllers\BaseController;
use App\Models\ModelKelas;

class ac extends BaseController
{
    public function ac()
    {
        $ac = new AcModel();
        $files_ac = $ac->findAll();
        $data = [
            'files_ac' => $files_ac,
            'heading' => 'ac',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => 'active',
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/ac/index', $data);
    }
    public function create()
    {
        $data = [
            'heading' => 'Tambah Data ac',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => 'active',
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
            'kelas' => (new ModelKelas())->findAll(),
        ];
        return view('admin/sarana/ac/create', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'brand_ac' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_ac' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_ac' => [
                'label' => 'gambar_ac',
                'rules' => 'uploaded[gambar_ac]|mime_in[gambar_ac,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
            'serial_number' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_ac'));
            return redirect()->to('/ac/create')->withInput();
        }
        $files = $this->request->getFile('gambar_ac');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/ac', $names);
        $data = [
            'brand_ac' => $this->request->getPost('brand_ac'),
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_ac' => $this->request->getPost('kondisi_ac'),
            'gambar_ac' => $names,
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        //dd($data);
        $ac = new AcModel();
        $ac->insert($data);

        return redirect()->to(base_url('ac'));
    }

    public function update($id)
    {
        $ac = new AcModel();
        $data = [
            'brand_ac' => $this->request->getPost('brand_ac'),
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_ac' => $this->request->getPost('kondisi_ac'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        if ($this->request->getFile('gambar_ac')->getName() == '') {

            $ac->where('id', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_ac');
            $names = $files->getName();
            $files->move('assets/dokumen/ac', $names);
            $data['gambar_ac'] = $names;
            $ac->where('id', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/ac'));
    }

    public function deleted($id = false)
    {
        $ac = new AcModel();
        $ac->where('id', $id);
        $ac->delete($id);
        return redirect()->to(base_url('/ac'));
    }
    public function edit($id = false)
    {
        $ac = new AcModel();
        $files_ac = $ac->find($id);
        $data = [
            'heading' => 'Edit Data AC',
            'files_ac' => $files_ac,
            'kelas' => (new ModelKelas())->findAll(),
        ];

        return view('admin/sarana/ac/edit', $data);
    }
}
