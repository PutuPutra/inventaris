<?php

namespace App\Controllers;

use App\Models\ModelKelas;
use App\Models\PapanTulisModel;
use App\Controllers\BaseController;

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
            'sidebar2' => 'open active',
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
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
        ];
        return view('admin/sarana/papanTulis/filePapanTulis', $data);
    }
    public function tambahPapanTulis()
    {
        $data = [
            'heading' => 'Tambah Data Papan Tulis',
            'sidebar1' => null,
            'sidebar2' => 'open active',
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
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
            'kelas' => (new ModelKelas())->findAll(),
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
        $files->move('assets/dokumen/papanTulis', $names);
        $data = [
            'serial_number' => $this->request->getPost('serial_number'),
            'gambar_papan_tulis' => $names,
            'ukuran_papan_tulis' => $this->request->getPost('ukuran_papan_tulis'),
            'kondisi_papan_tulis' => $this->request->getPost('kondisi_papan_tulis'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        //dd($data);
        $papanTulis = new PapanTulisModel();
        $papanTulis->insert($data);

        return redirect()->to(base_url('papanTulis'));
    }
    public function deleted($id = false)
    {
        $papanTulis = new PapanTulisModel();
        $papanTulis->where('id', $id);
        $papanTulis->delete($id);
        return redirect()->to(base_url('/papanTulis'));
    }

    public function editPapanTulis($id = false)
    {
        $papanTulis = new PapanTulisModel();
        $files_papanTulis = $papanTulis->find($id);
        $data = [
            'heading' => 'Edit Data Papan Tulis',
            'sidebar1' => null,
            'sidebar2' => 'open active',
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
            'submenu11' => null,
            'submenu12' => null,
            'submenu13' => null,
            'sub1' => null,
            'sub2' => null,
            'files_papanTulis' => $files_papanTulis,
            'kelas' => (new ModelKelas())->findAll(),
        ];

        return view('admin/sarana/papanTulis/editPapanTulis', $data);
    }

    public function updatePapanTulis($id)
    {
        $papanTulis = new PapanTulisModel();
        $data = [
            'ukuran_papan_tulis' => $this->request->getPost('ukuran_papan_tulis'),
            'serial_number' => $this->request->getPost('serial_number'),
            'kondisi_papan_tulis' => $this->request->getPost('kondisi_papan_tulis'),
            'id_kelas' => $this->request->getPost('id_kelas'),
        ];
        if ($this->request->getFile('gambar_papan_tulis')->getName() == '') {

            $papanTulis->where('id', $id)->set($data)->update();
        } else {

            $files = $this->request->getFile('gambar_papan_tulis');
            $names = $files->getName();
            $files->move('assets/dokumen/papanTulis', $names);
            $data['gambar_papan_tulis'] = $names;
            $papanTulis->where('id', $id)->set($data)->update();
        }
        return redirect()->to(base_url('/papanTulis'));
    }
}
