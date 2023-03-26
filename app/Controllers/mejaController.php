<?php

namespace App\Controllers;

use App\Models\MejaModel;
use App\Models\ModelKelas;
use App\Controllers\BaseController;

class mejaController extends BaseController
{
    public function meja()
    {
        $meja = new MejaModel();
        $files_meja = $meja->findAll();
        $data = [
            'files_meja' => $files_meja,
            'heading' => 'Meja',
            'sidebar1' => null,
            'sidebar2' => 'open active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => 'active',
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
        return view('admin/sarana/meja/fileMeja', $data);
    }
    public function tambahMeja()
    {
        $data = [
            'heading' => 'Tambah Data Meja',
            'sidebar1' => null,
            'sidebar2' => 'open active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => 'active',
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
        return view('admin/sarana/meja/tambahMeja', $data);
    }
    public function store()
    {
        $validate = $this->validate([
            'ukuran_meja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'kondisi_meja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harus mengisi bagian ini',
                ],
            ],
            'gambar_meja' => [
                'label' => 'gambar_meja',
                'rules' => 'uploaded[gambar_meja]|mime_in[gambar_meja,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahMeja')->withInput();
        }
        $files = $this->request->getFile('gambar_meja');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/meja', $names);
        $data = [
            'serial_number' => $this->request->getPost('serial_number'),
            'gambar_meja' => $names,
            'ukuran_meja' => $this->request->getPost('ukuran_meja'),
            'kondisi_meja' => $this->request->getPost('kondisi_meja'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        //dd($data);
        $meja = new MejaModel();
        $meja->insert($data);

        return redirect()->to(base_url('meja'));
    }
    public function deleted($id = false)
    {
        $meja = new MejaModel();
        $meja->where('id', $id);
        $meja->delete($id);
        return redirect()->to(base_url('/meja'));
    }

    public function updateMeja($id)
    {
        $meja = new MejaModel();
        $data = [
            'ukuran_meja' => $this->request->getPost('ukuran_meja'),
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_meja' => $this->request->getPost('kondisi_meja'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        if ($this->request->getFile('gambar_meja')->getName() == '') {

            $meja->where('id', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_meja');
            $names = $files->getName();
            $files->move('assets/dokumen/meja', $names);
            $data['gambar_meja'] = $names;
            $meja->where('id', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/meja'));
    }

    public function editMeja($id = false)
    {
        $meja = new MejaModel();
        $files_meja = $meja->find($id);
        $data = [
            'heading' => 'Edit Data Meja',
            'sidebar1' => null,
            'sidebar2' => 'open active',
            'sidebar3' => null,
            'submenu1' => null,
            'submenu2' => null,
            'submenu3' => null,
            'submenu4' => 'active',
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
            'files_meja' => $files_meja,
            'kelas' => (new ModelKelas())->findAll(),
        ];

        return view('admin/sarana/meja/editMeja', $data);
    }
}
