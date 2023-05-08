<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RuanganModel;

class RuanganController extends BaseController
{

    public function index()
    {

        $ruangan = new RuanganModel();
        $files_ruangan = $ruangan->findAll();
        $data = [
            'files_ruangan' => $files_ruangan,
            'title' => 'Kelas',
            'sidebar1' => null,
            'sidebar2' => null,
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
            'submenu10' => null,
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => 'active',
            'sub3' => null,

        ];
        return view('admin/prasarana/ruangan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Ruangan',
            'sidebar1' => null,
            'sidebar2' => null,
            'sidebar3' => 'open active',
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => null,
            'submenu5' => null,
            'submenu6' => null,
            'submenu7' => null,
            'submenu8' => null,
            'submenu9' => null,
            'submenu10' => null,
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => 'active',
            'sub3' => null,
        ];
        return view('admin/prasarana/ruangan/create', $data);
    }

    public function store()
    {
        $validate = $this->validate([
            'kepala_ruangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'nama_ruangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_ruangan' => [
                'label' => 'gambar_komputer',
                'rules' => 'uploaded[gambar_komputer]|mime_in[gambar_komputer,image/jpg,image/jpeg,image/png]',
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
        $files = $this->request->getFile('gambar_komputer');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/komputer', $names);
        $data = [
            'serial_number_komputer' => $this->request->getPost('serial_number_komputer'),
            'gambar_komputer' => $names,
            'jenis_produk_komputer' => $this->request->getPost('jenis_produk_komputer'),
            'kondisi_komputer' => $this->request->getPost('kondisi_komputer'),
            'brand_komputer' => $this->request->getPost('brand_komputer'),
            'spesifikasi_komputer' => $this->request->getPost('spesifikasi_komputer'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        $laptop = new KomputerModel();
        $laptop->insert($data);

        return redirect()->to(base_url('komputer'));
    }
}
