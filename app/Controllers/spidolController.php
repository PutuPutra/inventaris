<?php

namespace App\Controllers;

use App\Models\ModelKelas;
use App\Models\SpidolModel;
use App\Controllers\BaseController;

class spidolController extends BaseController
{
    public function spidol()
    {
        $spidol = new SpidolModel();
        $files_spidol = $spidol->findAll();
        $data = [
            'files_spidol' => $files_spidol,
            'heading' => 'Spidol',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => 'active',
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/spidol/fileSpidol', $data);
    }
    public function tambahSpidol()
    {
        $data = [
            'heading' => 'Tambah Data Spidol',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => 'active',
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
            'kelas' => (new ModelKelas())->findAll(),
        ];
        return view('admin/sarana/spidol/tambahSpidol', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'merk_spidol' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_spidol' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'warna_spidol' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_spidol' => [
                'label' => 'gambar_spidol',
                'rules' => 'uploaded[gambar_spidol]|mime_in[gambar_spidol,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahSpidol')->withInput();
        }
        $files = $this->request->getFile('gambar_spidol');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/spidol', $names);
        $data = [
            'serial_number' => $this->request->getPost('serial_number'),
            'id_kelas' => $this->request->getPost('id_kelas'),
            'gambar_spidol' => $names,
            'merk_spidol' => $this->request->getPost('merk_spidol'),
            'kondisi_spidol' => $this->request->getPost('kondisi_spidol'),
            'warna_spidol' => $this->request->getPost('warna_spidol')
        ];
        //dd($data);
        $spidol = new SpidolModel();
        $spidol->insert($data);

        return redirect()->to(base_url('spidol'));
    }
    public function deleted($id = false)
    {
        $spidol = new SpidolModel();
        $spidol->where('id', $id);
        $spidol->delete($id);
        return redirect()->to(base_url('/spidol'));
    }

    public function updateSpidol($id)
    {
        $spidol = new SpidolModel();
        $data = [
            'merk_spidol' => $this->request->getPost('merk_spidol'),
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_spidol' => $this->request->getPost('kondisi_spidol'),
            'warna_spidol' => $this->request->getPost('warna_spidol'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        if ($this->request->getFile('gambar_spidol')->getName() == '') {

            $spidol->where('id', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_spidol');
            $names = $files->getName();
            $files->move('assets/dokumen/spidol', $names);
            $data['gambar_spidol'] = $names;
            $spidol->where('id', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/spidol'));
    }

    public function editSpidol($id = false)
    {
        $spidol = new SpidolModel();
        $files_spidol = $spidol->find($id);
        $data = [
            'heading' => 'Edit Data Spidol',
            'files_spidol' => $files_spidol,
            'kelas' => (new ModelKelas())->findAll(),
        ];

        return view('admin/sarana/spidol/editSpidol', $data);
    }
}
