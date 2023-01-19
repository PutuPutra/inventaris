<?php

namespace App\Controllers;

use App\Models\PenggarisModel;

class penggarisController extends BaseController
{
    public function penggaris()
    {
        $penggaris = new PenggarisModel();
        $files_penggaris = $penggaris->findAll();
        $data = [
            'files_penggaris' => $files_penggaris,
            'heading' => 'Penggaris',
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
            'submenu9' => null,
            'submenu10' => 'active',
        ];
        return view('admin/sarana/penggaris/filePenggaris', $data);
    }
    public function tambahPenggaris()
    {
        $data = [
            'heading' => 'Tambah Data Penggaris',
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
            'submenu9' => null,
            'submenu10' => 'active',
        ];
        return view('admin/sarana/penggaris/tambahPenggaris', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'merk_penggaris' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_penggaris' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'panjang_penggaris' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_penggaris' => [
                'label' => 'gambar_penggaris',
                'rules' => 'uploaded[gambar_penggaris]|mime_in[gambar_penggaris,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum pilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahPenggaris')->withInput();
        }
        $files = $this->request->getFile('gambar_penggaris');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/penggaris', $names);
        $data = [
            'gambar_penggaris' => $names,
            'merk_penggaris' => $this->request->getPost('merk_penggaris'),
            'kondisi_penggaris' => $this->request->getPost('kondisi_penggaris'),
            'panjang_penggaris' => $this->request->getPost('panjang_penggaris')

        ];
        //dd($data);
        $penggaris = new PenggarisModel();
        $penggaris->insert($data);

        return redirect()->to(base_url('penggaris'));
    }
    public function deleted($id = false)
    {
        $penggaris = new PenggarisModel();
        $penggaris->delete($id);
        return redirect()->to(base_url('/penggaris'));
    }
}
