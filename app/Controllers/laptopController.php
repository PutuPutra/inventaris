<?php

namespace App\Controllers;

use App\Models\ModelKelas;
use App\Models\KomputerModel;
use App\Controllers\BaseController;

class laptopController extends BaseController
{
    public function __construct()
    {
        helper('text');
    }
    public function komputer()
    {
        $komputer = new KomputerModel();
        $files_komputer = $komputer->findAll();
        $data = [
            'files_komputer' => $files_komputer,
            'heading' => 'Komputer',
            'sidebar1' => null,
            'sidebar2' => 'open active',
            'sidebar3' => null,
            'submenu1' => 'active',
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
            'sub2' => null,
        ];
        return view('admin/sarana/laptop/fileKomputer', $data);
    }
    public function tambahLaptop()
    {
        $data = [
            'heading' => 'Tambah Data Komputer',
            'sidebar1' => null,
            'sidebar2' => 'open active',
            'sidebar3' => null,
            'submenu1' => 'active',
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
            'sub2' => null,
            'kelas' => (new ModelKelas())->findAll(),
        ];
        return view('admin/sarana/laptop/tambahLaptop', $data);
    }
    // public function editLaptop()
    // {
    //     $komputer = new KomputerModel();
    //     $files_komputer = $komputer->findAll();
    //     $data = [
    //         'heading' => 'Edit Data Komputer',
    //         'files_komputer' => $files_komputer,
    //     ];
    //     return view('admin/sarana/laptop/editKomputer', $data);
    // }
    public function store()
    {
        $validate = $this->validate([
            'brand_komputer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_komputer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'spesifikasi_komputer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'jenis_produk_komputer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_komputer' => [
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
            return redirect()->to('tambahLaptop')->withInput();
        }
        $files = $this->request->getFile('gambar_komputer');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/laptop', $names);
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
    public function deleted($id = false)
    {
        $komputer = new KomputerModel();
        $komputer->where('id', $id);
        $komputer->delete($id);
        return redirect()->to(base_url('/komputer'));
    }

    public function updateKomputer($id)
    {
        $komputer = new KomputerModel();
        $data = [
            'brand_komputer' => $this->request->getPost('brand_komputer'),
            'kondisi_komputer' => $this->request->getPost('kondisi_komputer'),
            'spesifikasi_komputer' => $this->request->getPost('spesifikasi_komputer'),
            'jenis_produk_komputer' => $this->request->getPost('jenis_produk_komputer'),
        ];
        if ($this->request->getFile('gambar_komputer')->getName() == '') {

            $komputer->where('id', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_komputer');
            $names = $files->getName();
            $files->move('assets/dokumen/laptop', $names);
            $data['gambar_komputer'] = $names;
            $komputer->where('id', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/komputer'));
    }

    public function editLaptop($id = false)
    {
        $komputer = new KomputerModel();
        $files_komputer = $komputer->find($id);
        $data = [
            'heading' => 'Edit Data Komputer',
            'sidebar1' => null,
            'sidebar2' => 'open active',
            'sidebar3' => null,
            'submenu1' => 'active',
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
            'sub2' => null,
            'files_komputer' => $files_komputer
        ];

        return view('admin/sarana/laptop/editKomputer', $data);
    }
}
