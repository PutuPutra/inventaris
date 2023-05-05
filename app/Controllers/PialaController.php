<?php

namespace App\Controllers;

use App\Models\ModelKelas;
use App\Models\PialaModel;
use App\Controllers\BaseController;

class PialaController extends BaseController
{
    public function index(){
        $data = [
            'title' => 'Piala',
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
            'piala' => (new PialaModel())->findAll(),
        ];

        return view('admin/prasarana/piala/index', $data);
    }

    public function store(){
        
        $data = [
            'nama_piala' => $this->request->getVar('nama_piala'),
            'tingkat' => $this->request->getVar('tingkat'),
            'posisi' => $this->request->getVar('posisi'),
            'tahun' => $this->request->getVar('tahun'),
            'peserta' => $this->request->getVar('peserta'),

        ];
        $model = new PialaModel();
        $model->insert($data);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/piala');
    }
    public function tambahPiala(){
        $data = [
            'title' => 'Piala',
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
        ];

        return view('admin/prasarana/piala/tambahPiala', $data);
    }
    public function update($id)
{
    $piala = new PialaModel();
    $data = [
        'nama_piala' => $this->request->getVar('nama_piala'),
        'tingkat' => $this->request->getVar('tingkat'),
        'posisi' => $this->request->getVar('posisi'),
        'tahun' => $this->request->getVar('tahun'),
        'peserta' => $this->request->getVar('peserta'),
    ];
    $piala->where('id_piala', $id)->set($data)->update();
    return redirect()->to(base_url('/piala'));
}

    public function edit($id = false)
    {
        $piala = new PialaModel();
        $data_piala = $piala->find($id);
        $data = [
            'heading' => 'Edit Data Piala',
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
            'data_piala' => $data_piala,
            'kelas' => (new ModelKelas())->findAll(),
        ];
        return view('admin/prasarana/piala/edit', $data);
    }
    public function destroy($id){
        $model = new PialaModel();
        $model->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/piala');
    }
}
