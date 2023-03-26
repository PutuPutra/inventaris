<?php

namespace App\Controllers;

use App\Models\KipasAnginModel;
use App\Controllers\BaseController;
use App\Models\ModelKelas;

class kipasAngin extends BaseController
{
    public function index()
    {
        $kipasAngin = new KipasAnginModel();
        $files_kipas_angin = $kipasAngin->findAll();
        $data = [
            'files_kipas_angin' => $files_kipas_angin,
            'heading' => 'Data Kipas Angin',
            'sidebar1' => null,
            'sidebar2' => 'open active',
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
            'submenu12' => 'active',
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
        ];
        return view('admin/sarana/kipasAngin/index', $data);
    }
    public function create()
    {
        $data = [
            'heading' => 'Tambah Data Kipas Angin',
            'sidebar1' => null,
            'sidebar2' => 'open active',
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
            'submenu12' => 'active',
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
            'kelas' => (new ModelKelas())->findAll(),
        ];
        return view('admin/sarana/kipasAngin/create', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'kondisi_kipas_angin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_kipas_angin' => [
                'label' => 'gambar_kipas_angin',
                'rules' => 'uploaded[gambar_kipas_angin]|mime_in[gambar_kipas_angin,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
            'serial_number' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_kipas_angin'));
            return redirect()->to('/kipasAngin/create')->withInput();
        }
        $files = $this->request->getFile('gambar_kipas_angin');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/kipasAngin', $names);
        $data = [
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_kipas_angin' => $this->request->getPost('kondisi_kipas_angin'),
            'gambar_kipas_angin' => $names,
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        //dd($data);
        $kipasAngin = new KipasAnginModel();
        $kipasAngin->insert($data);

        return redirect()->to(base_url('kipasAngin'));
    }

    public function update($id)
    {
        $kipasAngin = new KipasAnginModel();
        $data = [
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_kipas_angin' => $this->request->getPost('kondisi_kipas_angin'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        if ($this->request->getFile('gambar_kipas_angin')->getName() == '') {

            $kipasAngin->where('id', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_kipas_angin');
            $names = $files->getName();
            $files->move('assets/dokumen/kipasAngin', $names);
            $data['gambar_kipas_angin'] = $names;
            $kipasAngin->where('id', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/kipasAngin'));
    }

    public function deleted($id = false)
    {
        $kipasAngin = new KipasAnginModel();
        $kipasAngin->where('id', $id);
        $kipasAngin->delete($id);
        return redirect()->to(base_url('/kipasAngin'));
    }
    public function edit($id = false)
    {
        $kipasAngin = new KipasAnginModel();
        $files_kipas_angin = $kipasAngin->find($id);
        $data = [
            'heading' => 'Edit Data Kipas Angin',
            'sidebar1' => null,
            'sidebar2' => 'open active',
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
            'submenu12' => 'active',
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
            'files_kipas_angin' => $files_kipas_angin,
            'kelas' => (new ModelKelas())->findAll(),
        ];

        return view('admin/sarana/kipasAngin/edit', $data);
    }
}
