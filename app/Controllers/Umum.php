<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Umum extends BaseController
{
    public function index()
    {
        $data = [
            'navbar1' => 'active',
            'navbar2' => null,
        ];
        return view('umum/index', $data);
    }
    public function kontak()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => 'active',
        ];
        return view('umum/kontak', $data);
    }
    public function tentang()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/tentang', $data);
    }

    public function sarana()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/sarana', $data);
    }

    public function prasarana()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/prasarana', $data);
    }
    public function dataKomputer()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataKomputer', $data);
    }
    public function dataBuku()
    {

        $data = [

            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataBuku', $data);
    }
    public function dataPapanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataPapanTulis', $data);
    }
    public function dataMeja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataMeja', $data);
    }
    public function dataKursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataKursi', $data);
    }
    public function dataFoto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataFoto', $data);
    }
    public function dataSpidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataSpidol', $data);
    }
    public function dataPenghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataPenghapus', $data);
    }
    public function dataPena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataPena', $data);
    }
    public function dataPenggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/file/dataPenggaris', $data);
    }
}
