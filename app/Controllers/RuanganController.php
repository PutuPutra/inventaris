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
            'title' => 'ruangan',
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

    public function edit($id = false)
    {
        $ruangan = new RuanganModel();
        $files_ruangan = $ruangan->find($id);
        $data = [
            'heading' => 'Edit Data ruangan',
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
            'sub1' => 'active',
            'sub2' => null,
            'sub3' => null,
            'files_ruangan' => $files_ruangan,
            'id' => $id,
            'id_ruangan' => $id,
        ];

        return view('admin/prasarana/ruangan/edit', $data);
    }


    public function store()
    {
        $validate = $this->validate([

            'gambar_ruangan' => [
                'label' => 'gambar_ruangan',
                'rules' => 'uploaded[gambar_ruangan]|mime_in[gambar_ruangan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
            'nama_ruangan' => [
                'label' => 'nama_ruangan',
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Field Nama Ruangan harus diisi',
                    'max_length' => 'Field Nama Ruangan maksimal 255 karakter',
                ],
            ],
            'kepala_ruangan' => [
                'label' => 'kepala_ruangan',
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Field Kepala Ruangan harus diisi',
                    'max_length' => 'Field Kepala Ruangan maksimal 255 karakter',
                ],
            ],
        ]);

        if (!$validate) {
            return redirect()->to('/ruangan/create')->withInput();
        }

        $files = $this->request->getFile('gambar_ruangan');
        $names = $files->getName();

        $files->move(ROOTPATH . 'public/assets/dokumen/ruangan', $names);

        $nama_ruangan = $this->request->getPost('nama_ruangan');
        $kepala_ruangan = $this->request->getPost('kepala_ruangan');

        // Validasi input hanya satu kali kecuali dengan tanda "-"
        // $nama_ruangan = preg_replace('/\s+/', '-', $nama_ruangan); // ganti spasi dengan -
        $nama_ruangan = preg_replace('/-+/', '-', $nama_ruangan); // hapus kelebihan tanda -
        $nama_ruangan = trim($nama_ruangan, '-'); // hapus tanda - di awal dan akhir

        $kepala_ruangan = preg_replace('/\s+/', '-', $kepala_ruangan);
        $kepala_ruangan = preg_replace('/-+/', '-', $kepala_ruangan);
        $kepala_ruangan = trim($kepala_ruangan, '-');

        // Check jika nama_ruangan sudah pernah ada di database
        $ruangan = new RuanganModel();
        $existing_ruangan = $ruangan->where('nama_ruangan', $nama_ruangan)->first();
        if ($existing_ruangan) {
            session()->setFlashdata('error', 'Nama Ruangan sudah ada di database, silahkan input nama ruangan yang lain');
            return redirect()->back()->withInput();
        }
        // Validasi inputan form


        $data = [
            'gambar_ruangan' => $names,
            'nama_ruangan' => $this->request->getPost('nama_ruangan'),
            'kepala_ruangan' => $this->request->getPost('kepala_ruangan'),
        ];
        $insert = (new RuanganModel())->insert($data);
        if ($insert) {
            session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('ruangan'));
        }
    }

    public function update($id)
    {
        $ruangan = new RuanganModel();
        $data = [
            'nama_ruangan' => $this->request->getPost('nama_ruangan'),
            'kepala_ruangan' => $this->request->getPost('kepala_ruangan'),
        ];
        if ($this->request->getFile('gambar_ruangan')->getName() == '') {

            $ruangan->where('id_ruangan', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_ruangan');
            $names = $files->getName();
            $files->move('assets/dokumen/ruangan', $names);
            $data['gambar_ruangan'] = $names;
            $ruangan->where('id_ruangan', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/ruangan'));
    }
    public function delete($id = false)
    {
        $ruangan = new RuanganModel();
        $ruangan->where('id_ruangan', $id);
        $ruangan->delete($id);
        return redirect()->to(base_url('/ruangan'));
    }
}
