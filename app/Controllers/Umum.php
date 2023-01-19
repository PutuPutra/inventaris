<?php

namespace App\Controllers;

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
}
