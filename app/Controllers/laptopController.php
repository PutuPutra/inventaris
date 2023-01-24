<?php

namespace App\Controllers;

use App\Models\KomputerModel;

class laptopController extends BaseController
{
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
            'heading' => 'Tambah Data Komputer'
        ];
        return view('admin/sarana/laptop/tambahLaptop', $data);
    }
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
            'gambar_komputer' => $names,
            'jenis_produk_komputer' => $this->request->getPost('jenis_produk_komputer'),
            'kondisi_komputer' => $this->request->getPost('kondisi_komputer'),
            'brand_komputer' => $this->request->getPost('brand_komputer'),
            'spesifikasi_komputer' => $this->request->getPost('spesifikasi_komputer'),
        ];
        //dd($data);
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

    public function updateKomputer()
    {
        $komputer = new KomputerModel();
        $komputer->update($this->request->getPost('id'), $this->request->getPost());

        return redirect()->to(base_url('/komputer'));
    }
    public function KomputerEdit($id = false)

    {
        $komputer = new KomputerModel();
        $files_komputer = $komputer->find($id);
        $data = [
            'heading' => 'Edit Data Komputer',
            'files_komputer' => $files_komputer
        ];

        return view('admin/sarana/laptop/KomputerEdit', $data);
    }
}
