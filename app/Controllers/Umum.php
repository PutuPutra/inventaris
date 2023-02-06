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
    public function x1()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x1', $data);
    }
    public function x2()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x2', $data);
    }
    public function x3()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x3', $data);
    }
    public function x4()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x4', $data);
    }
    public function x5()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x5', $data);
    }
    public function x6()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x6', $data);
    }
    public function x7()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x7', $data);
    }
    public function x8()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x8', $data);
    }
    public function x9()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x9', $data);
    }
    public function x10()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x10', $data);
    }
    public function x11()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/x11', $data);
    }
    public function ximipa1()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/mipa/xi1', $data);
    }
    public function ximipa2()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/mipa/xi2', $data);
    }
    public function ximipa3()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/mipa/xi3', $data);
    }
    public function ximipa4()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/mipa/xi4', $data);
    }
    public function ximipa5()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/mipa/xi5', $data);
    }
    public function ximipa6()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/mipa/xi6', $data);
    }
    public function ximipa7()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/mipa/xi7', $data);
    }
    public function ximipa8()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/mipa/xi8', $data);
    }
    public function xiips1()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/ips/xi1', $data);
    }
    public function xiips2()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/ips/xi2', $data);
    }
    public function xiips3()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/ips/xi3', $data);
    }
    public function xiips4()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/ips/xi4', $data);
    }
    public function xiimipa1()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/mipa/xii1', $data);
    }
    public function xiimipa2()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/mipa/xii2', $data);
    }
    public function xiimipa3()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/mipa/xii3', $data);
    }
    public function xiimipa4()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/mipa/xii4', $data);
    }
    public function xiimipa5()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/mipa/xii5', $data);
    }
    public function xiimipa6()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/mipa/xii6', $data);
    }
    public function xiimipa7()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/mipa/xii7', $data);
    }
    public function xiiips1()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/ips/xii1', $data);
    }
    public function xiiips2()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/ips/xii2', $data);
    }
    public function xiiips3()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/ips/xii3', $data);
    }
    public function xiiips4()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/ips/xii4', $data);
    }
    public function aula()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/bangunan/aula', $data);
    }
    public function masjid()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/bangunan/masjid', $data);
    }
    public function satpam()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/bangunan/satpam', $data);
    }
    public function kepsek()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/kepsek', $data);
    }
    public function kurikulum()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/kurikulum', $data);
    }
    public function kesiswaan()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/kesiswaan', $data);
    }
    public function sarpras()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/sarpras', $data);
    }
    public function humas()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/humas', $data);
    }
    public function akademik()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/akademik', $data);
    }
    public function guru()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/guru', $data);
    }
    public function bk()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/bk', $data);
    }
    public function uks()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/uks', $data);
    }
    public function tu()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/tu', $data);
    }
    public function koker()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/koker', $data);
    }
    public function bahasa()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/bahasa', $data);
    }
    public function kimia()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/kimia', $data);
    }
    public function fisika()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/fisika', $data);
    }
    public function biologi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/biologi', $data);
    }
    public function dapur()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/ruangan/dapur', $data);
    }
}
