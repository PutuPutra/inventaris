<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\FotoModel;
use App\Models\MejaModel;
use App\Models\PenaModel;
use App\Models\KursiModel;
use App\Models\PialaModel;
use App\Models\SpidolModel;
use App\Models\KomputerModel;
use App\Models\PenggarisModel;
use App\Models\PenghapusModel;
use App\Models\PapanTulisModel;
use App\Controllers\BaseController;

class Umum extends BaseController
{
    public function index()
    {
        $data = [
            'navbar1' => 'active',
            'navbar2' => null,
            'piala' => (new PialaModel())->countAllResults(),
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
            'computers' => (new KomputerModel())->findAll(),
        ];
        return view('umum/file/dataKomputer', $data);
    }
    public function dataBuku()
    {

        $data = [

            'navbar1' => null,
            'navbar2' => null,
            'books' => (new BukuModel())->findAll(),
        ];
        return view('umum/file/dataBuku', $data);
    }
    public function dataPapanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'boards' => (new PapanTulisModel())->findAll(),
        ];
        return view('umum/file/dataPapanTulis', $data);
    }
    public function dataMeja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'tables' => (new MejaModel())->findAll(),
        ];
        return view('umum/file/dataMeja', $data);
    }
    public function dataKursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'chairs' => (new KursiModel())->findAll(),
        ];
        return view('umum/file/dataKursi', $data);
    }
    public function dataFoto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'photos' => (new FotoModel())->findAll(),
        ];
        return view('umum/file/dataFoto', $data);
    }
    public function dataSpidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'spidols' => (new SpidolModel())->findAll(),
        ];
        return view('umum/file/dataSpidol', $data);
    }
    public function dataPenghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'erasers' => (new PenghapusModel())->findAll(),
        ];
        return view('umum/file/dataPenghapus', $data);
    }
    public function dataPena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'pens' => (new PenaModel())->findAll(),
        ];
        return view('umum/file/dataPena', $data);
    }
    public function dataPenggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'rulers' => (new PenggarisModel())->findAll(),
        ];
        return view('umum/file/dataPenggaris', $data);
    }
    public function x1()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'tables' => (new MejaModel())->where('id_kelas', '1')->findAll(),
            'chairs' => (new KursiModel())->where('id_kelas', '1')->findAll(),
            'photos' => (new FotoModel())->where('id_kelas', '1')->findAll(),
            'boards' => (new PapanTulisModel())->where('id_kelas', '1')->findAll(),
            'spidols' => (new SpidolModel())->where('id_kelas', '1')->findAll(),
            'pens' => (new PenaModel())->where('id_kelas', '1')->findAll(),
            'rules' => (new PenggarisModel())->where('id_kelas', '1')->findAll(),
            'erasers' => (new PenghapusModel())->where('id_kelas', '1')->findAll(),
        ];
        return view('umum/kelas/x/x1', $data);
    }
    public function x2()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'tables' => (new MejaModel())->where('id_kelas', '2')->findAll(),
            'chairs' => (new KursiModel())->where('id_kelas', '2')->findAll(),
            'photos' => (new FotoModel())->where('id_kelas', '2')->findAll(),
            'boards' => (new PapanTulisModel())->where('id_kelas', '2')->findAll(),
            'spidols' => (new SpidolModel())->where('id_kelas', '2')->findAll(),
            'pens' => (new PenaModel())->where('id_kelas', '2')->findAll(),
            'rules' => (new PenggarisModel())->where('id_kelas', '2')->findAll(),
            'erasers' => (new PenghapusModel())->where('id_kelas', '2')->findAll(),
        ];
        return view('umum/kelas/x/x2', $data);
    }
    public function x3()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
            'tables' => (new MejaModel())->where('id_kelas', '4')->findAll(),
            'chairs' => (new KursiModel())->where('id_kelas', '4')->findAll(),
            'photos' => (new FotoModel())->where('id_kelas', '4')->findAll(),
            'boards' => (new PapanTulisModel())->where('id_kelas', '4')->findAll(),
            'spidols' => (new SpidolModel())->where('id_kelas', '4')->findAll(),
            'pens' => (new PenaModel())->where('id_kelas', '4')->findAll(),
            'rules' => (new PenggarisModel())->where('id_kelas', '4')->findAll(),
            'erasers' => (new PenghapusModel())->where('id_kelas', '4')->findAll(),
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

    // isi kelas x1
    public function x1buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/buku/filebuku', $data);
    }
    public function x1papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/papantulis/papanTulis', $data);
    }
    public function x1meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/meja/meja', $data);
    }
    public function x1kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/kursi/kursi', $data);
    }
    public function x1foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/foto/foto', $data);
    }
    public function x1spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/spidol/spidol', $data);
    }
    public function x1penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/penghapus/penghapus', $data);
    }
    public function x1pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/pena/pena', $data);
    }
    public function x1penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x1/penggaris/penggaris', $data);
    }
    // isi kelas x1


    // isi kelas x2
    public function x2buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/penggaris/penggaris', $data);
    }
    public function x2papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/papan_tulis/papanTulis', $data);
    }
    public function x2meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/meja/meja', $data);
    }
    public function x2kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/kursi/kursi', $data);
    }
    public function x2foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/foto/foto', $data);
    }
    public function x2spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/spidol/spidol', $data);
    }
    public function x2penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/penghapus/penghapus', $data);
    }
    public function x2pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/pena/pena', $data);
    }
    public function x2penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x2/penggaris/penggaris', $data);
    }
    // isi kelas x2


    // isi kelas x3
    public function x3buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/penggaris/penggaris', $data);
    }
    public function x3papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/papan_tulis/papanTulis', $data);
    }
    public function x3meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/meja/meja', $data);
    }
    public function x3kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/kursi/kursi', $data);
    }
    public function x3foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/foto/foto', $data);
    }
    public function x3spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/spidol/spidol', $data);
    }
    public function x3penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/penghapus/penghapus', $data);
    }
    public function x3pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/pena/pena', $data);
    }
    public function x3penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x3/penggaris/penggaris', $data);
    }
    // isi kelas x3

    // isi kelas x4
    public function x4buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/penggaris/penggaris', $data);
    }
    public function x4papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/papan_tulis/papanTulis', $data);
    }
    public function x4meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/meja/meja', $data);
    }
    public function x4kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/kursi/kursi', $data);
    }
    public function x4foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/foto/foto', $data);
    }
    public function x4spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/spidol/spidol', $data);
    }
    public function x4penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/penghapus/penghapus', $data);
    }
    public function x4pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/pena/pena', $data);
    }
    public function x4penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x4/penggaris/penggaris', $data);
    }
    // isi kelas x4

    // isi kelas x5
    public function x5buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/penggaris/penggaris', $data);
    }
    public function x5papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/papan_tulis/papanTulis', $data);
    }
    public function x5meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/meja/meja', $data);
    }
    public function x5kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/kursi/kursi', $data);
    }
    public function x5foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/foto/foto', $data);
    }
    public function x5spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/spidol/spidol', $data);
    }
    public function x5penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/penghapus/penghapus', $data);
    }
    public function x5pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/pena/pena', $data);
    }
    public function x5penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x5/penggaris/penggaris', $data);
    }
    // isi kelas x5

    // isi kelas x6
    public function x6buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/penggaris/penggaris', $data);
    }
    public function x6papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/papan_tulis/papanTulis', $data);
    }
    public function x6meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/meja/meja', $data);
    }
    public function x6kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/kursi/kursi', $data);
    }
    public function x6foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/foto/foto', $data);
    }
    public function x6spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/spidol/spidol', $data);
    }
    public function x6penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/penghapus/penghapus', $data);
    }
    public function x6pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/pena/pena', $data);
    }
    public function x6penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x6/penggaris/penggaris', $data);
    }
    // isi kelas x6

    // isi kelas x7
    public function x7buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/penggaris/penggaris', $data);
    }
    public function x7papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/papan_tulis/papanTulis', $data);
    }
    public function x7meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/meja/meja', $data);
    }
    public function x7kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/kursi/kursi', $data);
    }
    public function x7foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/foto/foto', $data);
    }
    public function x7spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/spidol/spidol', $data);
    }
    public function x7penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/penghapus/penghapus', $data);
    }
    public function x7pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/pena/pena', $data);
    }
    public function x7penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x7/penggaris/penggaris', $data);
    }
    // isi kelas x7

    // isi kelas x8
    public function x8buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/penggaris/penggaris', $data);
    }
    public function x8papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/papan_tulis/papanTulis', $data);
    }
    public function x8meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/meja/meja', $data);
    }
    public function x8kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/kursi/kursi', $data);
    }
    public function x8foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/foto/foto', $data);
    }
    public function x8spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/spidol/spidol', $data);
    }
    public function x8penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/penghapus/penghapus', $data);
    }
    public function x8pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/pena/pena', $data);
    }
    public function x8penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x8/penggaris/penggaris', $data);
    }
    // isi kelas x8

    // isi kelas x9
    public function x9buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/penggaris/penggaris', $data);
    }
    public function x9papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/papan_tulis/papanTulis', $data);
    }
    public function x9meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/meja/meja', $data);
    }
    public function x9kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/kursi/kursi', $data);
    }
    public function x9foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/foto/foto', $data);
    }
    public function x9spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/spidol/spidol', $data);
    }
    public function x9penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/penghapus/penghapus', $data);
    }
    public function x9pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/pena/pena', $data);
    }
    public function x9penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x9/penggaris/penggaris', $data);
    }
    // isi kelas x9


    // isi kelas x10
    public function x10buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/penggaris/penggaris', $data);
    }
    public function x10papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/papan_tulis/papanTulis', $data);
    }
    public function x10meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/meja/meja', $data);
    }
    public function x10kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/kursi/kursi', $data);
    }
    public function x10foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/foto/foto', $data);
    }
    public function x10spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/spidol/spidol', $data);
    }
    public function x10penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/penghapus/penghapus', $data);
    }
    public function x10pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/pena/pena', $data);
    }
    public function x10penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x10/penggaris/penggaris', $data);
    }
    // isi kelas x10

    // isi kelas x10
    public function x11buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/penggaris/penggaris', $data);
    }
    public function x11papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/papan_tulis/papanTulis', $data);
    }
    public function x11meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/meja/meja', $data);
    }
    public function x11kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/kursi/kursi', $data);
    }
    public function x11foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/foto/foto', $data);
    }
    public function x11spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/spidol/spidol', $data);
    }
    public function x11penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/penghapus/penghapus', $data);
    }
    public function x11pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/pena/pena', $data);
    }
    public function x11penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/x/data/x11/penggaris/penggaris', $data);
    }
    // isi kelas x11


    // =============================kelas xi====================================

    //XI IPS1
    public function xiips1buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/buku/filebuku', $data);
    }
    public function xiips1papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/papan_tulis/papanTulis', $data);
    }
    public function xiips1meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/meja/meja', $data);
    }
    public function xiips1kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/kursi/kursi', $data);
    }
    public function xiips1foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/foto/foto', $data);
    }
    public function xiips1spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/spidol/spidol', $data);
    }
    public function xiips1penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/penghapus/penghapus', $data);
    }
    public function xiips1pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/pena/pena', $data);
    }
    public function xiips1penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi1/penggaris/penggaris', $data);
    }
    //XI IPS2
    public function xiips2buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/buku/filebuku', $data);
    }
    public function xiips2papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/papan_tulis/papanTulis', $data);
    }
    public function xiips2meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/meja/meja', $data);
    }
    public function xiips2kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/kursi/kursi', $data);
    }
    public function xiips2foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/foto/foto', $data);
    }
    public function xiips2spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/spidol/spidol', $data);
    }
    public function xiips2penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/penghapus/penghapus', $data);
    }
    public function xiips2pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/pena/pena', $data);
    }
    public function xiips2penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi2/penggaris/penggaris', $data);
    }
    //XI IPS3
    public function xiips3buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/buku/filebuku', $data);
    }
    public function xiips3papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/papan_tulis/papanTulis', $data);
    }
    public function xiips3meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/meja/meja', $data);
    }
    public function xiips3kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/kursi/kursi', $data);
    }
    public function xiips3foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/foto/foto', $data);
    }
    public function xiips3spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/spidol/spidol', $data);
    }
    public function xiips3penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/penghapus/penghapus', $data);
    }
    public function xiips3pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/pena/pena', $data);
    }
    public function xiips3penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi3/penggaris/penggaris', $data);
    }
    //XI IPS4
    public function xiips4buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/buku/filebuku', $data);
    }
    public function xiips4papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/papan_tulis/papanTulis', $data);
    }
    public function xiips4meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/meja/meja', $data);
    }
    public function xiips4kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/kursi/kursi', $data);
    }
    public function xiips4foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/foto/foto', $data);
    }
    public function xiips4spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/spidol/spidol', $data);
    }
    public function xiips4penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/penghapus/penghapus', $data);
    }
    public function xiips4pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/pena/pena', $data);
    }
    public function xiips4penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ips/xi4/penggaris/penggaris', $data);
    }
    //===============
    // XI IPA 1
    public function xiipa1buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/buku/filebuku', $data);
    }
    public function xiipa1papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/papan_tulis/papanTulis', $data);
    }
    public function xiipa1meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/meja/meja', $data);
    }
    public function xiipa1kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/kursi/kursi', $data);
    }
    public function xiipa1foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/foto/foto', $data);
    }
    public function xiipa1spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/spidol/spidol', $data);
    }
    public function xiipa1penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/penghapus/penghapus', $data);
    }
    public function xiipa1pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/pena/pena', $data);
    }
    public function xiipa1penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi1/penggaris/penggaris', $data);
    }
    // XI IPA 2
    public function xiipa2buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/buku/filebuku', $data);
    }
    public function xiipa2papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/papan_tulis/papanTulis', $data);
    }
    public function xiipa2meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/meja/meja', $data);
    }
    public function xiipa2kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/kursi/kursi', $data);
    }
    public function xiipa2foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/foto/foto', $data);
    }
    public function xiipa2spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/spidol/spidol', $data);
    }
    public function xiipa2penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/penghapus/penghapus', $data);
    }
    public function xiipa2pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/pena/pena', $data);
    }
    public function xiipa2penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi2/penggaris/penggaris', $data);
    }
    // XI IPA 3
    public function xiipa3buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/buku/filebuku', $data);
    }
    public function xiipa3papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/papan_tulis/papanTulis', $data);
    }
    public function xiipa3meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/meja/meja', $data);
    }
    public function xiipa3kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/kursi/kursi', $data);
    }
    public function xiipa3foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/foto/foto', $data);
    }
    public function xiipa3spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/spidol/spidol', $data);
    }
    public function xiipa3penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/penghapus/penghapus', $data);
    }
    public function xiipa3pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/pena/pena', $data);
    }
    public function xiipa3penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi3/penggaris/penggaris', $data);
    }
    // XI IPA 4
    public function xiipa4buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/buku/filebuku', $data);
    }
    public function xiipa4papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/papan_tulis/papanTulis', $data);
    }
    public function xiipa4meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/meja/meja', $data);
    }
    public function xiipa4kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/kursi/kursi', $data);
    }
    public function xiipa4foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/foto/foto', $data);
    }
    public function xiipa4spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/spidol/spidol', $data);
    }
    public function xiipa4penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/penghapus/penghapus', $data);
    }
    public function xiipa4pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/pena/pena', $data);
    }
    public function xiipa4penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi4/penggaris/penggaris', $data);
    }
    // XI IPA 5
    public function xiipa5buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/buku/filebuku', $data);
    }
    public function xiipa5papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/papan_tulis/papanTulis', $data);
    }
    public function xiipa5meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/meja/meja', $data);
    }
    public function xiipa5kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/kursi/kursi', $data);
    }
    public function xiipa5foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/foto/foto', $data);
    }
    public function xiipa5spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/spidol/spidol', $data);
    }
    public function xiipa5penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/penghapus/penghapus', $data);
    }
    public function xiipa5pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/pena/pena', $data);
    }
    public function xiipa5penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi5/penggaris/penggaris', $data);
    }
    // XI IPA 6
    public function xiipa6buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/buku/filebuku', $data);
    }
    public function xiipa6papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/papan_tulis/papanTulis', $data);
    }
    public function xiipa6meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/meja/meja', $data);
    }
    public function xiipa6kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/kursi/kursi', $data);
    }
    public function xiipa6foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/foto/foto', $data);
    }
    public function xiipa6spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/spidol/spidol', $data);
    }
    public function xiipa6penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/penghapus/penghapus', $data);
    }
    public function xiipa6pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/pena/pena', $data);
    }
    public function xiipa6penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi6/penggaris/penggaris', $data);
    }
    // XI IPA 7
    public function xiipa7buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/buku/filebuku', $data);
    }
    public function xiipa7papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/papan_tulis/papanTulis', $data);
    }
    public function xiipa7meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/meja/meja', $data);
    }
    public function xiipa7kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/kursi/kursi', $data);
    }
    public function xiipa7foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/foto/foto', $data);
    }
    public function xiipa7spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/spidol/spidol', $data);
    }
    public function xiipa7penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/penghapus/penghapus', $data);
    }
    public function xiipa7pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/pena/pena', $data);
    }
    public function xiipa7penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi7/penggaris/penggaris', $data);
    }
    // XI IPA 8
    public function xiipa8buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/buku/filebuku', $data);
    }
    public function xiipa8papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/papan_tulis/papanTulis', $data);
    }
    public function xiipa8meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/meja/meja', $data);
    }
    public function xiipa8kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/kursi/kursi', $data);
    }
    public function xiipa8foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/foto/foto', $data);
    }
    public function xiipa8spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/spidol/spidol', $data);
    }
    public function xiipa8penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/penghapus/penghapus', $data);
    }
    public function xiipa8pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/pena/pena', $data);
    }
    public function xiipa8penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xi/data/ipa/xi8/penggaris/penggaris', $data);
    }
    // =============================kelas xi====================================

    // =============================kelas xii===================================
    //XII IPS 1
    public function xiiips1buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/buku/filebuku', $data);
    }
    public function xiiips1papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/papan_tulis/papanTulis', $data);
    }
    public function xiiips1meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/meja/meja', $data);
    }
    public function xiiips1kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/kursi/kursi', $data);
    }
    public function xiiips1foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/foto/foto', $data);
    }
    public function xiiips1spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/spidol/spidol', $data);
    }
    public function xiiips1penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/penghapus/penghapus', $data);
    }
    public function xiiips1pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/pena/pena', $data);
    }
    public function xiiips1penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii1/penggaris/penggaris', $data);
    }
    //XII IPS 2
    public function xiiips2buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/buku/filebuku', $data);
    }
    public function xiiips2papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/papan_tulis/papanTulis', $data);
    }
    public function xiiips2meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/meja/meja', $data);
    }
    public function xiiips2kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/kursi/kursi', $data);
    }
    public function xiiips2foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/foto/foto', $data);
    }
    public function xiiips2spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/spidol/spidol', $data);
    }
    public function xiiips2penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/penghapus/penghapus', $data);
    }
    public function xiiips2pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/pena/pena', $data);
    }
    public function xiiips2penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii2/penggaris/penggaris', $data);
    }
    //XII IPS 3
    public function xiiips3buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/buku/filebuku', $data);
    }
    public function xiiips3papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/papan_tulis/papanTulis', $data);
    }
    public function xiiips3meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/meja/meja', $data);
    }
    public function xiiips3kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/kursi/kursi', $data);
    }
    public function xiiips3foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/foto/foto', $data);
    }
    public function xiiips3spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/spidol/spidol', $data);
    }
    public function xiiips3penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/penghapus/penghapus', $data);
    }
    public function xiiips3pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/pena/pena', $data);
    }
    public function xiiips3penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii3/penggaris/penggaris', $data);
    }
    //XII IPS 4
    public function xiiips4buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/buku/filebuku', $data);
    }
    public function xiiips4papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/papan_tulis/papanTulis', $data);
    }
    public function xiiips4meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/meja/meja', $data);
    }
    public function xiiips4kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/kursi/kursi', $data);
    }
    public function xiiips4foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/foto/foto', $data);
    }
    public function xiiips4spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/spidol/spidol', $data);
    }
    public function xiiips4penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/penghapus/penghapus', $data);
    }
    public function xiiips4pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/pena/pena', $data);
    }
    public function xiiips4penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ips/xii4/penggaris/penggaris', $data);
    }
    //XII IPA 1
    public function xiiipa1buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/buku/filebuku', $data);
    }
    public function xiiipa1papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/papan_tulis/papanTulis', $data);
    }
    public function xiiipa1meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/meja/meja', $data);
    }
    public function xiiipa1kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/kursi/kursi', $data);
    }
    public function xiiipa1foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/foto/foto', $data);
    }
    public function xiiipa1spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/spidol/spidol', $data);
    }
    public function xiiipa1penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/penghapus/penghapus', $data);
    }
    public function xiiipa1pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/pena/pena', $data);
    }
    public function xiiipa1penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii1/penggaris/penggaris', $data);
    }
    //XII IPA 2
    public function xiiipa2buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/buku/filebuku', $data);
    }
    public function xiiipa2papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/papan_tulis/papanTulis', $data);
    }
    public function xiiipa2meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/meja/meja', $data);
    }
    public function xiiipa2kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/kursi/kursi', $data);
    }
    public function xiiipa2foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/foto/foto', $data);
    }
    public function xiiipa2spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/spidol/spidol', $data);
    }
    public function xiiipa2penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/penghapus/penghapus', $data);
    }
    public function xiiipa2pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/pena/pena', $data);
    }
    public function xiiipa2penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii2/penggaris/penggaris', $data);
    }
    //XII IPA 3
    public function xiiipa3buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/buku/filebuku', $data);
    }
    public function xiiipa3papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/papan_tulis/papanTulis', $data);
    }
    public function xiiipa3meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/meja/meja', $data);
    }
    public function xiiipa3kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/kursi/kursi', $data);
    }
    public function xiiipa3foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/foto/foto', $data);
    }
    public function xiiipa3spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/spidol/spidol', $data);
    }
    public function xiiipa3penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/penghapus/penghapus', $data);
    }
    public function xiiipa3pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/pena/pena', $data);
    }
    public function xiiipa3penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii3/penggaris/penggaris', $data);
    }
    //XII IPA 4
    public function xiiipa4buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/buku/filebuku', $data);
    }
    public function xiiipa4papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/papan_tulis/papanTulis', $data);
    }
    public function xiiipa4meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/meja/meja', $data);
    }
    public function xiiipa4kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/kursi/kursi', $data);
    }
    public function xiiipa4foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/foto/foto', $data);
    }
    public function xiiipa4spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/spidol/spidol', $data);
    }
    public function xiiipa4penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/penghapus/penghapus', $data);
    }
    public function xiiipa4pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/pena/pena', $data);
    }
    public function xiiipa4penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii4/penggaris/penggaris', $data);
    }
    //XII IPA 5
    public function xiiipa5buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/buku/filebuku', $data);
    }
    public function xiiipa5papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/papan_tulis/papanTulis', $data);
    }
    public function xiiipa5meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/meja/meja', $data);
    }
    public function xiiipa5kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/kursi/kursi', $data);
    }
    public function xiiipa5foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/foto/foto', $data);
    }
    public function xiiipa5spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/spidol/spidol', $data);
    }
    public function xiiipa5penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/penghapus/penghapus', $data);
    }
    public function xiiipa5pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/pena/pena', $data);
    }
    public function xiiipa5penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii5/penggaris/penggaris', $data);
    }
    //XII IPA 6
    public function xiiipa6buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/buku/filebuku', $data);
    }
    public function xiiipa6papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/papan_tulis/papanTulis', $data);
    }
    public function xiiipa6meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/meja/meja', $data);
    }
    public function xiiipa6kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/kursi/kursi', $data);
    }
    public function xiiipa6foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/foto/foto', $data);
    }
    public function xiiipa6spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/spidol/spidol', $data);
    }
    public function xiiipa6penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/penghapus/penghapus', $data);
    }
    public function xiiipa6pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/pena/pena', $data);
    }
    public function xiiipa6penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii6/penggaris/penggaris', $data);
    }
    //XII IPA 7
    public function xiiipa7buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/buku/filebuku', $data);
    }
    public function xiiipa7papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/papan_tulis/papanTulis', $data);
    }
    public function xiiipa7meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/meja/meja', $data);
    }
    public function xiiipa7kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/kursi/kursi', $data);
    }
    public function xiiipa7foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/foto/foto', $data);
    }
    public function xiiipa7spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/spidol/spidol', $data);
    }
    public function xiiipa7penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/penghapus/penghapus', $data);
    }
    public function xiiipa7pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/pena/pena', $data);
    }
    public function xiiipa7penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii7/penggaris/penggaris', $data);
    }
    //XII IPA 8
    public function xiiipa8buku()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/buku/filebuku', $data);
    }
    public function xiiipa8papanTulis()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/papan_tulis/papanTulis', $data);
    }
    public function xiiipa8meja()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/meja/meja', $data);
    }
    public function xiiipa8kursi()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/kursi/kursi', $data);
    }
    public function xiiipa8foto()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/foto/foto', $data);
    }
    public function xiiipa8spidol()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/spidol/spidol', $data);
    }
    public function xiiipa8penghapus()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/penghapus/penghapus', $data);
    }
    public function xiiipa8pena()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/pena/pena', $data);
    }
    public function xiiipa8penggaris()
    {
        $data = [
            'navbar1' => null,
            'navbar2' => null,
        ];
        return view('umum/kelas/xii/data/ipa/xii8/penggaris/penggaris', $data);
    }
    // =============================kelas xii===================================

}
