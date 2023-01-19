<?php

namespace App\Controllers;

use App\Models\PenghapusModel;

class penghapusController extends BaseController
{
    public function penghapus()
    {
        $penghapus = new PenghapusModel();
        $files_penghapus = $penghapus->findAll();
        $data = [
            'files_penghapus' => $files_penghapus,
            'heading' => 'Penghapus',
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
            'submenu8' => 'active',
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/penghapus/filePenghapus', $data);
    }
    public function tambahPenghapus()
    {
        $data = [
            'heading' => 'Tambah Data Penghapus',
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
            'submenu8' => 'active',
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/penghapus/tambahPenghapus', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'merk_penghapus' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_penghapus' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_penghapus' => [
                'label' => 'gambar_penghapus',
                'rules' => 'uploaded[gambar_penghapus]|mime_in[gambar_penghapus,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum pilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahPenghapus')->withInput();
        }
        $files = $this->request->getFile('gambar_penghapus');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/penghapus', $names);
        $data = [
            'gambar_penghapus' => $names,
            'merk_penghapus' => $this->request->getPost('merk_penghapus'),
            'kondisi_penghapus' => $this->request->getPost('kondisi_penghapus')
        ];
        //dd($data);
        $penghapus = new PenghapusModel();
        $penghapus->insert($data);

        return redirect()->to(base_url('penghapus'));
    }
    public function deleted($id = false)
    {
        $penghapus = new PenghapusModel();
        $penghapus->delete($id);
        return redirect()->to(base_url('/penghapus'));
    }
}
