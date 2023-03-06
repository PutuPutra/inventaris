<?php

namespace App\Controllers;

use App\Models\JamModel;
use App\Models\ModelKelas;
use App\Controllers\BaseController;

class jam extends BaseController
{
    public function jam()
    {
        $jam = new JamModel();
        $files_jam = $jam->findAll();
        $data = [
            'files_jam' => $files_jam,
            'heading' => 'Jam',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => 'active',
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/jam/index', $data);
    }
    public function create()
    {
        $data = [
            'heading' => 'Tambah Data Jam',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => 'active',
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
            'kelas' => (new ModelKelas())->findAll(),
        ];
        return view('admin/sarana/jam/create', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'serial_number' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_jam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_jam' => [
                'label' => 'gambar_jam',
                'rules' => 'uploaded[gambar_jam]|mime_in[gambar_jam,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('create')->withInput();
        }
        $files = $this->request->getFile('gambar_jam');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/jam', $names);
        $data = [
            'serial_number' => $this->request->getPost('serial_number'),
            'gambar_jam' => $names,
            'kondisi_jam' => $this->request->getPost('kondisi_jam'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        $jam = new JamModel();
        $jam->insert($data);

        return redirect()->to(base_url('jam'));
    }
    public function deleted($id = false)
    {
        $jam = new JamModel();
        $jam->delete($id);
        return redirect()->to(base_url('/jam'));
    }

    public function updatejam($id)
    {
        $jam = new JamModel();
        $data = [
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_jam' => $this->request->getPost('kondisi_jam'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        if ($this->request->getFile('gambar_jam')->getName() == '') {

            $jam->where('id', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_jam');
            $names = $files->getName();
            $files->move('assets/dokumen/jam', $names);
            $data['gambar_jam'] = $names;
            $jam->where('id', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/jam'));
    }

    public function edit($id = false)
    {
        $jam = new JamModel();
        $files_jam = $jam->find($id);
        $data = [
            'heading' => 'Edit Data Jam',
            'files_jam' => $files_jam,
            'kelas' => (new ModelKelas())->findAll(),
        ];

        return view('admin/sarana/jam/edit', $data);
    }
}
