<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKelas;

class Kelas extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Kelas',
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
            'kelas' => (new ModelKelas())->findAll(),

        ];


        return view('admin/prasarana/kelas/index', $data);
    }

    public function tambahKelas()
    {
        $data = [
            'title' => 'Tambah Kelas',
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
        ];
        return view('admin/prasarana/kelas/tambahKelas', $data);
    }
    // public function update($id)
    // {
    //     $kelas = new ModelKelas();
    //     $rules = [
    //         'nama_kelas' => 'required',
    //         'ketua_kelas' => 'required',
    //         'wali_kelas' => 'required'
    //     ];

    //     if (!$this->validate($rules)) {
    //         return redirect()->back()->withInput()->with('validation', $this->validator);
    //     }

    //     $data = [
    //         'nama_kelas' => $this->request->getPost('nama_kelas'),
    //         'ketua_kelas' => $this->request->getPost('ketua_kelas'),
    //         'wali_kelas' => $this->request->getPost('wali_kelas'),
    //     ];

    //     if ($this->request->getFile('gambar_kelas')->isValid()) {
    //         $files = $this->request->getFile('gambar_kelas');
    //         $names = $files->getRandomName();
    //         $files->move('assets/dokumen/kelas', $names);
    //         $data['gambar_kelas'] = $names;
    //     }

    //     $kelas->update($id, $data);

    //     return redirect()->to(base_url('/kelas'))->with('success', 'Data kelas berhasil diupdate.');
    // }

    // public function update($id)
    // {
    //     $kelas = new ModelKelas();
    //     $data = [
    //         'nama_kelas' => $this->request->getPost('nama_kelas'),
    //         'wali_kelas' => $this->request->getPost('wali_kelas'),
    //         'ketua_kelas' => $this->request->getPost('ketua_kelas'),
    //     ];

    //     if ($this->request->getFile('gambar_kelas')->getName() != '') {
    //         $files = $this->request->getFile('gambar_kelas');
    //         $names = $files->getName();
    //         $files->move('assets/dokumen/kelas', $names);
    //         $data['gambar_kelas'] = $names;
    //     }

    //     $kelas->where('id_kelas', $id)->set($data)->update();
    //     return redirect()->to(base_url('/kelas'));
    // }

    // public function updated($id)
    // {
    //     $kelas = new ModelKelas();
    //     $data = [
    //         'nama_kelas' => $this->request->getPost('nama_kelas'),
    //         'wali_kelas' => $this->request->getPost('wali_kelas'),
    //         'ketua_kelas' => $this->request->getPost('ketua_kelas'),
    //     ];

    //     if ($this->request->getFile('gambar_kelas')->getName() != '') {
    //         $files = $this->request->getFile('gambar_kelas');
    //         $names = $files->getName();
    //         $files->move('assets/dokumen/kelas', $names);
    //         $data['gambar_kelas'] = $names;
    //     }
    //     $kelas->where('id_kelas', $id)->set($data)->update();
    //     return redirect()->to(base_url('/kelas'));
    // }

    public function update($id)
    {
        $kelas = new ModelKelas();
        $data = [
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'wali_kelas' => $this->request->getPost('wali_kelas'),
            'ketua_kelas' => $this->request->getPost('ketua_kelas'),
        ];
        if ($this->request->getFile('gambar_kelas')->getName() == '') {

            $kelas->where('id_kelas', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_kelas');
            $names = $files->getName();
            $files->move('assets/dokumen/kelas', $names);
            $data['gambar_kelas'] = $names;
            $kelas->where('id_kelas', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/kelas'));
    }

    public function store()
    {
        $validate = $this->validate([

            'gambar_kelas' => [
                'label' => 'gambar_kelas',
                'rules' => 'uploaded[gambar_kelas]|mime_in[gambar_kelas,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar belum dipilih',
                    'mime_in' => 'Hanya menerima file berekstensi (jpg, jpeg, png)',

                ],
            ],
            'nama_kelas' => [
                'label' => 'Nama Kelas',
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Field Nama Kelas harus diisi',
                    'max_length' => 'Field Nama Kelas maksimal 255 karakter',
                ],
            ],
            'wali_kelas' => [
                'label' => 'Wali Kelas',
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Field Wali Kelas harus diisi',
                    'max_length' => 'Field Wali Kelas maksimal 255 karakter',
                ],
            ],
            'ketua_kelas' => [
                'label' => 'Ketua Kelas',
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Field Ketua Kelas harus diisi',
                    'max_length' => 'Field Ketua Kelas maksimal 255 karakter',
                ],
            ],
        ]);

        if (!$validate) {
            // dd($this->request->getFile('gambar_komputer'));
            return redirect()->to('tambahKelas')->withInput();
        }
        $files = $this->request->getFile('gambar_kelas');
        $names = $files->getName();
        // dd($files);
        $files->move('assets/dokumen/kelas', $names);

        $nama_kelas = $this->request->getPost('nama_kelas');
        $wali_kelas = $this->request->getPost('wali_kelas');
        $ketua_kelas = $this->request->getPost('ketua_kelas');

        // Validasi input hanya satu kali kecuali dengan tanda "-"
        // $nama_kelas = preg_replace('/\s+/', '-', $nama_kelas); // ganti spasi dengan -
        $nama_kelas = preg_replace('/-+/', '-', $nama_kelas); // hapus kelebihan tanda -
        $nama_kelas = trim($nama_kelas, '-'); // hapus tanda - di awal dan akhir

        $wali_kelas = preg_replace('/\s+/', '-', $wali_kelas);
        $wali_kelas = preg_replace('/-+/', '-', $wali_kelas);
        $wali_kelas = trim($wali_kelas, '-');

        $ketua_kelas = preg_replace('/\s+/', '-', $ketua_kelas);
        $ketua_kelas = preg_replace('/-+/', '-', $ketua_kelas);
        $ketua_kelas = trim($ketua_kelas, '-');

        // Check jika nama_kelas sudah pernah ada di database
        $kelas = new ModelKelas();
        $existing_kelas = $kelas->where('nama_kelas', $nama_kelas)->first();
        if ($existing_kelas) {
            session()->setFlashdata('error', 'Nama Kelas sudah ada di database, silahkan input nama kelas yang lain');
            return redirect()->back()->withInput();
        }
        // Validasi inputan form


        $data = [
            'gambar_kelas' => $names,
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'wali_kelas' => $this->request->getPost('wali_kelas'),
            'ketua_kelas' => $this->request->getPost('ketua_kelas'),
        ];
        $insert = (new ModelKelas())->insert($data);
        if ($insert) {
            session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('kelas'));
        }
    }
    public function updateKelass($id)
    {
        $kelas = new ModelKelas();
        $nama_kelas = $this->request->getPost('nama_kelas');
        $wali_kelas = $this->request->getPost('wali_kelas');
        $ketua_kelas = $this->request->getPost('ketua_kelas');

        // Validasi input hanya satu kali kecuali dengan tanda "-"
        $nama_kelas = preg_replace('/-+/', '-', $nama_kelas); // hapus kelebihan tanda -
        $nama_kelas = trim($nama_kelas, '-'); // hapus tanda - di awal dan akhir

        $wali_kelas = preg_replace('/-+/', '-', $wali_kelas);
        $wali_kelas = trim($wali_kelas, '-');

        $ketua_kelas = preg_replace('/-+/', '-', $ketua_kelas);
        $ketua_kelas = trim($ketua_kelas, '-');

        // Check jika nama_kelas sudah pernah ada di database selain kelas dengan id yang sama
        $existing_kelas = $kelas->where('nama_kelas', $nama_kelas)->whereNotIn('id_kelas', [$id])->first();
        if ($existing_kelas) {
            session()->setFlashdata('error', 'Nama Kelas sudah ada di database, silahkan input nama kelas yang lain');
            return redirect()->back()->withInput();
        }

        $data = [
            'nama_kelas' => $nama_kelas,
            'wali_kelas' => $wali_kelas,
            'ketua_kelas' => $ketua_kelas,
        ];

        if ($this->request->getFile('gambar_kelas')->getName() == '') {
            $kelas->where('id_kelas', $id)->set($data)->update();
        } else {
            $files = $this->request->getFile('gambar_kelas');
            $names = $files->getName();
            $files->move('assets/dokumen/kelas', $names);
            $data['gambar_kelas'] = $names;
            $kelas->where('id_kelas', $id)->set($data)->update();
        }

        return redirect()->to(base_url('/kelas'));
    }

    public function editKelas($id = false)
    {
        $kelas = new ModelKelas();
        $files_kelas = $kelas->find($id);
        $data = [
            'heading' => 'Edit Data Kelas',
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
            'files_kelas' => $files_kelas,
            'id' => $id,
            'id_kelas' => $id,
        ];

        return view('admin/prasarana/kelas/editKelas', $data);
    }
    public function deleted($id = false)
    {
        $kelas = new ModelKelas();
        $kelas->where('id_kelas', $id);
        $kelas->delete($id);
        return redirect()->to(base_url('/kelas'));
    }
}
