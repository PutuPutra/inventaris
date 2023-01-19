<?php

namespace App\Controllers;

use App\Models\PapanTulisModel;

class papanTulisController extends BaseController
{
    public function papanTulis()
    {
        $papanTulis = new PapanTulisModel();
        $files_papan_tulis = $papanTulis->findAll();
        $data = [
            'files_papan_tulis' => $files_papan_tulis,
            'heading' => 'Papan Tulis',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => 'active',
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/papanTulis/filePapanTulis', $data);
    }
    public function tambahPapanTulis()
    {
        $data = [
            'heading' => 'Tambah Data Papan Tulis',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => 'active',
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/papanTulis/tambahPapanTulis', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'ukuran_papan_tulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_papan_tulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_papan_tulis' => [
                'label' => 'gambar_papan_tulis',
                'rules' => 'uploaded[gambar_papan_tulis]|mime_in[gambar_papan_tulis,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahPapanTulis')->withInput();
        }
        $files = $this->request->getFile('gambar_papan_tulis');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/foto', $names);
        $data = [
            'gambar_papan_tulis' => $names,
            'ukuran_papan_tulis' => $this->request->getPost('ukuran_papan_tulis'),
            'kondisi_papan_tulis' => $this->request->getPost('kondisi_papan_tulis')
        ];
        //dd($data);
        $papanTulis = new PapanTulisModel();
        $papanTulis->insert($data);

        return redirect()->to(base_url('papanTulis'));
    }
    public function deleted($id = false)
    {
        $papanTulis = new PapanTulisModel();
        $papanTulis->delete($id);
        return redirect()->to(base_url('/papanTulis'));
    }
}
