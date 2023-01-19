<?php

namespace App\Controllers;

use App\Models\SpidolModel;

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
        $files->move('assets/spidol', $names);
        $data = [
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
        $spidol->delete($id);
        return redirect()->to(base_url('/spidol'));
    }
}
