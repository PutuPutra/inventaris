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
        return view('umum/kelas/x/data/x1/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x2/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x3/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x4/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x5/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x6/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x7/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x8/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x9/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x10/buku/papan_tulis/papanTulis', $data);
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
        return view('umum/kelas/x/data/x11/buku/papan_tulis/papanTulis', $data);
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
    
    // =============================kelas xi====================================

}
