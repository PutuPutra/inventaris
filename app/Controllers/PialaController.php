<?php

namespace App\Controllers;

use App\Models\PialaModel;
use App\Controllers\BaseController;

class PialaController extends BaseController
{
    public function index(){
        $data = [
            'title' => 'Piala',
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
            'title' => 'Piala'
        ];

        return view('admin/prasarana/piala/tambahPiala', $data);
    }
    public function destroy($id){
        $model = new PialaModel();
        $model->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/piala');
    }
}
