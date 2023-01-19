<?php

namespace App\Controllers;

use App\Models\KursiModel;

class kursiController extends BaseController
{
    public function kursi()
    {
        $kursi = new KursiModel();
        $files_kursi = $kursi->findAll();
        $data = [
            'files_kursi' => $files_kursi,
            'heading' => 'Kursi',
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
        return view('admin/sarana/kursi/fileKursi', $data);
    }
    public function tambahKursi()
    {
        $data = [
            'heading' => 'Tambah Data Kursi',
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
        return view('admin/sarana/kursi/tambahKursi', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'ukuran_kursi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_kursi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_kursi' => [
                'label' => 'gambar_kursi',
                'rules' => 'uploaded[gambar_kursi]|mime_in[gambar_kursi,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahKursi')->withInput();
        }
        $files = $this->request->getFile('gambar_kursi');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/foto', $names);
        $data = [
            'gambar_kursi' => $names,
            'ukuran_kursi' => $this->request->getPost('ukuran_kursi'),
            'kondisi_kursi' => $this->request->getPost('kondisi_kursi')
        ];
        //dd($data);
        $kursi = new KursiModel();
        $kursi->insert($data);

        return redirect()->to(base_url('kursi'));
    }
    public function deleted($id = false)
    {
        $kursi = new KursiModel();
        $kursi->delete($id);
        return redirect()->to(base_url('/kursi'));
    }
}
