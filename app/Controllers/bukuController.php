<?php

namespace App\Controllers;

use App\Models\BukuModel;

class bukuController extends BaseController
{
    public function buku()
    {
        $buku = new BukuModel();
        $files_buku = $buku->findAll();
        $data = [
            'files_buku' => $files_buku,
            'heading' => 'Buku',
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
        return view('admin/sarana/buku/fileBuku', $data);
    }
    public function tambahBuku()
    {
        $data = [
            'heading' => 'Tambah Data Buku',
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
        return view('admin/sarana/buku/tambahBuku', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'penerbit_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'deskripsi_buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_buku' => [
                'label' => 'gambar_buku',
                'rules' => 'uploaded[gambar_buku]|mime_in[gambar_buku,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahBuku')->withInput();
        }
        $files = $this->request->getFile('gambar_buku');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/foto', $names);
        $data = [
            'gambar_buku' => $names,
            'penerbit_buku' => $this->request->getPost('penerbit_buku'),
            'kondisi_buku' => $this->request->getPost('kondisi_buku'),
            'deskripsi_buku' => $this->request->getPost('deskripsi_buku')
        ];
        //dd($data);
        $buku = new BukuModel();
        $buku->insert($data);

        return redirect()->to(base_url('buku'));
    }
    public function deleted($id = false)
    {
        $buku = new BukuModel();
        $buku->delete($id);
        return redirect()->to(base_url('/buku'));
    }
}
