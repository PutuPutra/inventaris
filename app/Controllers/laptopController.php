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
            'heading' => 'Komputer'
        ];
        return view('admin/sarana/laptop/fileKomputer', $data);
    }
    public function tambahLaptop()
    {
        $data = [
            'heading' => 'Tambah Data Komputer',
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
        $files->move('assets/foto', $names);
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
        $komputer->delete($id);
        return redirect()->to(base_url('/komputer'));
    }

    public function updateKomputer($id)
    {
        $komputer = new KomputerModel();
        if($this->request->getFile('gambar_komputer')->getName() == ''){
            $data = [
                'brand_komputer' => $this->request->getPost('brand_komputer'),
                'kondisi_komputer' => $this->request->getPost('kondisi_komputer'),
                'spesifikasi_komputer' => $this->request->getPost('spesifikasi_komputer'),
                'jenis_produk_komputer' => $this->request->getPost('jenis_produk_komputer'),
            ];
            $komputer->where('id', $id)->set($data)->update();
        }else{

            $files = $this->request->getFile('gambar_komputer');
            $names = $files->getName();
            $files->move('assets/foto', $names);
            $komputer->update($this->request->getPost('id'), $this->request->getPost());
            $komputer->where('id', $id)->set('gambar_komputer', $names)->update();
        }
        return redirect()->to(base_url('/komputer'));
    }

    public function editLaptop($id = false)
    {
        $komputer = new KomputerModel();
        $files_komputer = $komputer->find($id);
        $data = [
            'heading' => 'Edit Data Komputer',
            'files_komputer' => $files_komputer
        ];

        return view('admin/sarana/laptop/editKomputer', $data);
    }
}
