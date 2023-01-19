<?php

namespace App\Controllers;

use App\Models\FotoModel;

class fotoController extends BaseController
{
    public function foto()
    {
        $foto = new FotoModel();
        $files_foto = $foto->findAll();
        $data = [
            'files_foto' => $files_foto,
            'heading' => 'Foto',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => 'active',
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/foto/fileFoto', $data);
    }
    public function tambahFoto()
    {
        $data = [
            'heading' => 'Tambah Data Foto',
            'sidebar1' => null,
            'sidebar2' => 'active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => 'active',
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
        ];
        return view('admin/sarana/foto/tambahFoto', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'ukuran_foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_foto' => [
                'label' => 'gambar_foto',
                'rules' => 'uploaded[gambar_foto]|mime_in[gambar_foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahFoto')->withInput();
        }
        $files = $this->request->getFile('gambar_foto');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/foto', $names);
        $data = [
            'gambar_foto' => $names,
            'ukuran_foto' => $this->request->getPost('ukuran_foto'),
            'kondisi_foto' => $this->request->getPost('kondisi_foto')
        ];
        //dd($data);
        $foto = new FotoModel();
        $foto->insert($data);

        return redirect()->to(base_url('foto'));
    }
    public function deleted($id = false)
    {
        $foto = new FotoModel();
        $foto->delete($id);
        return redirect()->to(base_url('/foto'));
    }
}
