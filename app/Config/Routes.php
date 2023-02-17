<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/login', 'Home::login');
// $routes->get('/signin', 'Admin::signin');
// $routes->post('/kirim_komputer', 'Admin::kirim_komputer');
// $routes->get('/hapus_komputer/(:num)', 'adminController::hapus_komputer/$1');



$routes->get('/', 'Umum::index');
$routes->get('/kontak', 'Umum::kontak');
$routes->get('/tentang', 'Umum::tentang');
$routes->get('/sarana', 'Umum::sarana');
$routes->get('/prasarana', 'Umum::prasarana');
$routes->get('/dataKomputer', 'Umum::dataKomputer');
$routes->get('/dataBuku', 'Umum::dataBuku');
$routes->get('/dataPapanTulis', 'Umum::dataPapanTulis');
$routes->get('/dataMeja', 'Umum::dataMeja');
$routes->get('/dataKursi', 'Umum::dataKursi');
$routes->get('/dataFoto', 'Umum::dataFoto');
$routes->get('/dataSpidol', 'Umum::dataSpidol');
$routes->get('/dataPenghapus', 'Umum::dataPenghapus');
$routes->get('/dataPena', 'Umum::dataPena');
$routes->get('/dataPenggaris', 'Umum::dataPenggaris');


// kelas x start
$routes->get('/x/1', 'Umum::x1');
$routes->get('/x/2', 'Umum::x2');
$routes->get('/x/3', 'Umum::x3');
$routes->get('/x/4', 'Umum::x4');
$routes->get('/x/5', 'Umum::x5');
$routes->get('/x/6', 'Umum::x6');
$routes->get('/x/7', 'Umum::x7');
$routes->get('/x/8', 'Umum::x8');
$routes->get('/x/9', 'Umum::x9');
$routes->get('/x/10', 'Umum::x10');
$routes->get('/x/11', 'Umum::x11');
// kelas x end

// kelas xi mipa start
$routes->get('/xi/mipa/1', 'Umum::ximipa1');
$routes->get('/xi/mipa/2', 'Umum::ximipa2');
$routes->get('/xi/mipa/3', 'Umum::ximipa3');
$routes->get('/xi/mipa/4', 'Umum::ximipa4');
$routes->get('/xi/mipa/5', 'Umum::ximipa5');
$routes->get('/xi/mipa/6', 'Umum::ximipa6');
$routes->get('/xi/mipa/7', 'Umum::ximipa7');
$routes->get('/xi/mipa/8', 'Umum::ximipa8');
// kelas xi mipa end

// kelas xi ips start
$routes->get('/xi/ips/1', 'Umum::xiips1');
$routes->get('/xi/ips/2', 'Umum::xiips2');
$routes->get('/xi/ips/3', 'Umum::xiips3');
$routes->get('/xi/ips/4', 'Umum::xiips4');
// kelas xi ips end

// kelas xii mipa start
$routes->get('/xii/mipa/1', 'Umum::xiimipa1');
$routes->get('/xii/mipa/2', 'Umum::xiimipa2');
$routes->get('/xii/mipa/3', 'Umum::xiimipa3');
$routes->get('/xii/mipa/4', 'Umum::xiimipa4');
$routes->get('/xii/mipa/5', 'Umum::xiimipa5');
$routes->get('/xii/mipa/6', 'Umum::xiimipa6');
$routes->get('/xii/mipa/7', 'Umum::xiimipa7');
// kelas xii mipa end


// kelas xii ips start
$routes->get('/xii/ips/1', 'Umum::xiiips1');
$routes->get('/xii/ips/2', 'Umum::xiiips2');
$routes->get('/xii/ips/3', 'Umum::xiiips3');
$routes->get('/xii/ips/4', 'Umum::xiiips4');
// kelas xii ips end

// bangunan start
$routes->get('/aula', 'Umum::aula');
$routes->get('/masjid', 'Umum::masjid');
$routes->get('/satpam', 'Umum::satpam');
// bangunan end

// ruangan start
$routes->get('/ruangan/kepsek', 'Umum::kepsek');
$routes->get('/ruangan/waka/kurikulum', 'Umum::kurikulum');
$routes->get('/ruangan/waka/kesiswaan', 'Umum::kesiswaan');
$routes->get('/ruangan/waka/sarpras', 'Umum::sarpras');
$routes->get('/ruangan/waka/humas', 'Umum::humas');
$routes->get('/ruangan/akademik', 'Umum::akademik');
$routes->get('/ruangan/guru', 'Umum::guru');
$routes->get('/ruangan/bk', 'Umum::bk');
$routes->get('/ruangan/uks', 'Umum::uks');
$routes->get('/ruangan/tu', 'Umum::tu');
$routes->get('/ruangan/koker', 'Umum::koker');
$routes->get('/lab/bahasa', 'Umum::bahasa');
$routes->get('/lab/kimia', 'Umum::kimia');
$routes->get('/lab/fisika', 'Umum::fisika');
$routes->get('/lab/biologi', 'Umum::biologi');
$routes->get('/ruangan/dapur', 'Umum::dapur');
// ruangan end

//admin
$routes->get('/service', 'Admin::service');
$routes->get('/login', 'Admin::login');
// $routes->get('/register', 'Admin::register', ['filter' => 'login']);
$routes->get('/forgot_password', 'Admin::forgot_password');
$routes->get('/dashboard', 'Admin::dashboard', ['filter' => 'login']);
$routes->get('/data', 'Admin::data', ['filter' => 'login']);
$routes->get('/prasarana', 'Admin::prasarana', ['filter' => 'login']);
$routes->get('/account', 'Users::index', ['filter' => 'role:super_admin']);
$routes->get('/settings', 'Admin::settings', ['filter' => 'role:super_admin']);
$routes->get('/dashboard', 'Admin::dashboard', ['filter' => 'login']);
$routes->get('/notifications', 'Admin::notifications', ['filter' => 'login']);

// laptopController
$routes->post('/komputer/store', 'laptopController::store', ['filter' => 'login']);
$routes->post('/buku/store', 'bukuController::store', ['filter' => 'login']);
$routes->post('/papanTulis/store', 'papanTulisController::store', ['filter' => 'login']);

// laptop
$routes->get('/komputer', 'laptopController::komputer', ['filter' => 'login']);
$routes->get('/editnya', 'laptopController::editnya', ['filter' => 'login']);
$routes->get('/tambahLaptop', 'laptopController::tambahLaptop', ['filter' => 'login']);
$routes->get('/editLaptop/(:num)', 'laptopController::editLaptop/$1', ['filter' => 'login']);
$routes->get('/deleted/(:num)', 'laptopController::deleted/$1', ['filter' => 'login']);
$routes->post('/updateKomputer/(:num)', 'laptopController::updateKomputer/$1', ['filter' => 'login']);
$routes->get('/editKomputer/(:num)', 'laptopController::editKomputer/$1', ['filter' => 'login']);
$routes->get('/KomputerEdit/(:num)', 'laptopController::KomputerEdit/$1', ['filter' => 'login']);

// bukuController
$routes->post('/buku/store', 'bukuController::store', ['filter' => 'login']);

//buku
$routes->get('/buku', 'bukuController::buku', ['filter' => 'login']);
$routes->get('/tambahBuku', 'bukuController::tambahBuku', ['filter' => 'login']);
$routes->get('/buku/deleted/(:num)', 'bukuController::deleted/$1', ['filter' => 'login']);

// papanTulisController
$routes->post('/papanTulis/store', 'papanTulisController::store', ['filter' => 'login']);

//papan tulis
$routes->get('/papanTulis', 'papanTulisController::papanTulis', ['filter' => 'login']);
$routes->get('/tambahPapanTulis', 'papanTulisController::tambahPapanTulis', ['filter' => 'login']);
$routes->get('/papanTulis/deleted/(:num)', 'papanTulisController::deleted/$1', ['filter' => 'login']);

// mejaController
$routes->post('/meja/store', 'mejaController::store', ['filter' => 'login']);

// meja
$routes->get('/meja', 'mejaController::meja', ['filter' => 'login']);
$routes->get('/tambahMeja', 'mejaController::tambahMeja', ['filter' => 'login']);
$routes->get('/meja/deleted/(:num)', 'mejaController::deleted/$1', ['filter' => 'login']);

// kursiController
$routes->post('/kursi/store', 'kursiController::store', ['filter' => 'login']);

// meja
$routes->get('/kursi', 'kursiController::kursi', ['filter' => 'login']);
$routes->get('/tambahKursi', 'kursiController::tambahKursi', ['filter' => 'login']);
$routes->get('/kursi/deleted/(:num)', 'kursiController::deleted/$1', ['filter' => 'login']);

// fotoController
$routes->post('/foto/store', 'fotoController::store', ['filter' => 'login']);

// foto
$routes->get('/foto', 'fotoController::foto', ['filter' => 'login']);
$routes->get('/tambahFoto', 'fotoController::tambahFoto', ['filter' => 'login']);
$routes->get('/foto/deleted/(:num)', 'fotoController::deleted/$1', ['filter' => 'login']);

// spidolController
$routes->post('/spidol/store', 'spidolController::store', ['filter' => 'login']);

// spidol
$routes->get('/spidol', 'spidolController::spidol', ['filter' => 'login']);
$routes->get('/tambahSpidol', 'spidolController::tambahSpidol', ['filter' => 'login']);
$routes->get('/spidol/deleted/(:num)', 'spidolController::deleted/$1', ['filter' => 'login']);

// penghapusController
$routes->post('/penghapus/store', 'penghapusController::store', ['filter' => 'login']);

// penghapus
$routes->get('/penghapus', 'penghapusController::penghapus', ['filter' => 'login']);
$routes->get('/tambahPenghapus', 'penghapusController::tambahPenghapus', ['filter' => 'login']);
$routes->get('/penghapus/deleted/(:num)', 'penghapusController::deleted/$1', ['filter' => 'login']);

// penaController
$routes->post('/pena/store', 'penaController::store', ['filter' => 'login']);

// pena
$routes->get('/pena', 'penaController::pena', ['filter' => 'login']);
$routes->get('/tambahPena', 'penaController::tambahPena', ['filter' => 'login']);
$routes->get('/pena/deleted/(:num)', 'penaController::deleted/$1', ['filter' => 'login']);

// penggarisController
$routes->post('/penggaris/store', 'penggarisController::store', ['filter' => 'login']);

// penggaris
$routes->get('/penggaris', 'penggarisController::penggaris', ['filter' => 'login']);
$routes->get('/tambahPenggaris', 'penggarisController::tambahPenggaris', ['filter' => 'login']);
$routes->get('/penggaris/deleted/(:num)', 'penggarisController::deleted/$1', ['filter' => 'login']);

//prasarana
$routes->get('/kelas', 'Kelas::index', ['filter' => 'login']);
$routes->get('/tambahKelas', 'Kelas::tambahKelas', ['filter' => 'login']);
$routes->post('/kelas/store', 'Kelas::store', ['filter' => 'login']);
//piala
$routes->get('/piala', 'PialaController::index', ['filter' => 'login']);
$routes->get('/piala/tambahPiala', 'PialaController::tambahPiala', ['filter' => 'login']);
$routes->get('/piala/delete/(:num)', 'PialaController::destroy/$1', ['filter' => 'login']);
$routes->post('/piala/store', 'PialaController::store', ['filter' => 'login']);


// sarana kelas x 1
$routes->get('/x/1/buku', 'Umum::x1buku');
$routes->get('/x/1/papantulis', 'Umum::x1papanTulis');
$routes->get('/x/1/meja', 'Umum::x1meja');
$routes->get('/x/1/kursi', 'Umum::x1kursi');
$routes->get('/x/1/foto', 'Umum::x1foto');
$routes->get('/x/1/spidol', 'Umum::x1spidol');
$routes->get('/x/1/penghapus', 'Umum::x1penghapus');
$routes->get('/x/1/pena', 'Umum::x1pena');
$routes->get('/x/1/penggaris', 'Umum::x1penggaris');
$routes->get('/x/1/ac', 'Umum::x1ac');
// sarana kelas x 1

// sarana kelas x 2
$routes->get('/x/2/buku', 'Umum::x2buku');
$routes->get('/x/2/papantulis', 'Umum::x2papanTulis');
$routes->get('/x/2/meja', 'Umum::x2meja');
$routes->get('/x/2/kursi', 'Umum::x2kursi');
$routes->get('/x/2/foto', 'Umum::x2foto');
$routes->get('/x/2/spidol', 'Umum::x2spidol');
$routes->get('/x/2/penghapus', 'Umum::x2penghapus');
$routes->get('/x/2/pena', 'Umum::x2pena');
$routes->get('/x/2/penggaris', 'Umum::x2penggaris');
$routes->get('/x/2/ac', 'Umum::x2ac');
// sarana kelas x 2

// sarana kelas x 3
$routes->get('/x/3/buku', 'Umum::x3buku');
$routes->get('/x/3/papantulis', 'Umum::x3papanTulis');
$routes->get('/x/3/meja', 'Umum::x3meja');
$routes->get('/x/3/kursi', 'Umum::x3kursi');
$routes->get('/x/3/foto', 'Umum::x3foto');
$routes->get('/x/3/spidol', 'Umum::x3spidol');
$routes->get('/x/3/penghapus', 'Umum::x3penghapus');
$routes->get('/x/3/pena', 'Umum::x3pena');
$routes->get('/x/3/ac', 'Umum::x3ac');
// sarana kelas x 3

// sarana kelas x 4
$routes->get('/x/4/buku', 'Umum::x4buku');
$routes->get('/x/4/papantulis', 'Umum::x4papanTulis');
$routes->get('/x/4/meja', 'Umum::x1meja');
$routes->get('/x/4/kursi', 'Umum::x4kursi');
$routes->get('/x/4/foto', 'Umum::x4foto');
$routes->get('/x/4/spidol', 'Umum::x4spidol');
$routes->get('/x/4/penghapus', 'Umum::x4penghapus');
$routes->get('/x/4/pena', 'Umum::x4pena');
$routes->get('/x/4/ac', 'Umum::x4ac');
// sarana kelas x 4

// sarana kelas x 5
$routes->get('/x/5/buku', 'Umum::x5buku');
$routes->get('/x/5/papantulis', 'Umum::x5papanTulis');
$routes->get('/x/5/meja', 'Umum::x5meja');
$routes->get('/x/5/kursi', 'Umum::x5kursi');
$routes->get('/x/5/foto', 'Umum::x5foto');
$routes->get('/x/5/spidol', 'Umum::x5spidol');
$routes->get('/x/5/penghapus', 'Umum::x5penghapus');
$routes->get('/x/5/pena', 'Umum::x5pena');
$routes->get('/x/5/penggaris', 'Umum::x5penggaris');
$routes->get('/x/5/ac', 'Umum::x5ac');
// sarana kelas x 5

// sarana kelas x 6
$routes->get('/x/6/buku', 'Umum::x6buku');
$routes->get('/x/6/papantulis', 'Umum::x6papanTulis');
$routes->get('/x/6/meja', 'Umum::x6meja');
$routes->get('/x/6/kursi', 'Umum::x6kursi');
$routes->get('/x/6/foto', 'Umum::x6foto');
$routes->get('/x/6/spidol', 'Umum::x6spidol');
$routes->get('/x/6/penghapus', 'Umum::x6penghapus');
$routes->get('/x/6/pena', 'Umum::x6pena');
$routes->get('/x/6/ac', 'Umum::x6ac');
// sarana kelas x 6

// sarana kelas x 7
$routes->get('/x/7/buku', 'Umum::x7buku');
$routes->get('/x/7/papantulis', 'Umum::x7papanTulis');
$routes->get('/x/7/meja', 'Umum::x7meja');
$routes->get('/x/7/kursi', 'Umum::x7kursi');
$routes->get('/x/7/foto', 'Umum::x7foto');
$routes->get('/x/7/spidol', 'Umum::x7spidol');
$routes->get('/x/7/penghapus', 'Umum::x7penghapus');
$routes->get('/x/7/pena', 'Umum::x7pena');
$routes->get('/x/7/penggaris', 'Umum::x7penggaris');
$routes->get('/x/7/ac', 'Umum::x7ac');
// sarana kelas x 7

// sarana kelas x 8
$routes->get('/x/8/buku', 'Umum::x8buku');
$routes->get('/x/8/papantulis', 'Umum::x8papanTulis');
$routes->get('/x/8/meja', 'Umum::x8meja');
$routes->get('/x/8/kursi', 'Umum::x8kursi');
$routes->get('/x/8/foto', 'Umum::x8foto');
$routes->get('/x/8/spidol', 'Umum::x8spidol');
$routes->get('/x/8/penghapus', 'Umum::x8penghapus');
$routes->get('/x/8/pena', 'Umum::x8pena');
$routes->get('/x/8/penggaris', 'Umum::x8penggaris');
$routes->get('/x/8/ac', 'Umum::x8ac');
// sarana kelas x 8

// sarana kelas x 9
$routes->get('/x/9/buku', 'Umum::x9buku');
$routes->get('/x/9/papantulis', 'Umum::x9papanTulis');
$routes->get('/x/9/meja', 'Umum::x9meja');
$routes->get('/x/9/kursi', 'Umum::x9kursi');
$routes->get('/x/9/foto', 'Umum::x9foto');
$routes->get('/x/9/spidol', 'Umum::x9spidol');
$routes->get('/x/9/penghapus', 'Umum::x9penghapus');
$routes->get('/x/9/pena', 'Umum::x9pena');
$routes->get('/x/9/penggaris', 'Umum::x9penggaris');
$routes->get('/x/9/ac', 'Umum::x9ac');
// sarana kelas x 9

// sarana kelas x 10
$routes->get('/x/10/buku', 'Umum::x10buku');
$routes->get('/x/10/papantulis', 'Umum::x10papanTulis');
$routes->get('/x/10/meja', 'Umum::x10meja');
$routes->get('/x/10/kursi', 'Umum::x10kursi');
$routes->get('/x/10/foto', 'Umum::x10foto');
$routes->get('/x/10/spidol', 'Umum::x10spidol');
$routes->get('/x/10/penghapus', 'Umum::x10penghapus');
$routes->get('/x/10/pena', 'Umum::x10pena');
$routes->get('/x/10/penggaris', 'Umum::x10penggaris');
$routes->get('/x/10/ac', 'Umum::x10ac');
// sarana kelas x 10

// sarana kelas x 11
$routes->get('/x/11/buku', 'Umum::x11buku');
$routes->get('/x/11/papantulis', 'Umum::x11papanTulis');
$routes->get('/x/11/meja', 'Umum::x11meja');
$routes->get('/x/11/kursi', 'Umum::x11kursi');
$routes->get('/x/11/foto', 'Umum::x11foto');
$routes->get('/x/11/spidol', 'Umum::x11spidol');
$routes->get('/x/11/penghapus', 'Umum::x11penghapus');
$routes->get('/x/11/pena', 'Umum::x11pena');
$routes->get('/x/11/penggaris', 'Umum::x11penggaris');
$routes->get('/x/11/ac', 'Umum::x11ac');
// sarana kelas x 11

// ================================================== xi mipa start =====================================================
// ================================================== xi mipa start =====================================================

// sarana kelas xi mipa 1 start
$routes->get('/xi/mipa/1/buku', 'Umum::ximipa1buku');
$routes->get('/xi/mipa/1/papantulis', 'Umum::ximipa1papanTulis');
$routes->get('/xi/mipa/1/meja', 'Umum::ximipa1meja');
$routes->get('/xi/mipa/1/kursi', 'Umum::ximipa1kursi');
$routes->get('/xi/mipa/1/foto', 'Umum::ximipa1foto');
$routes->get('/xi/mipa/1/spidol', 'Umum::ximipa1spidol');
$routes->get('/xi/mipa/1/penghapus', 'Umum::ximipa1penghapus');
$routes->get('/xi/mipa/1/pena', 'Umum::ximipa1pena');
$routes->get('/xi/mipa/1/penggaris', 'Umum::ximipa1penggaris');
$routes->get('/xi/mipa/1/ac', 'Umum::ximipa1ac');
// sarana kelas xi mipa 1 end

// sarana kelas xi mipa 2 start
$routes->get('/xi/mipa/2/buku', 'Umum::ximipa2buku');
$routes->get('/xi/mipa/2/papantulis', 'Umum::ximipa2papanTulis');
$routes->get('/xi/mipa/2/meja', 'Umum::ximipa2meja');
$routes->get('/xi/mipa/2/kursi', 'Umum::ximipa2kursi');
$routes->get('/xi/mipa/2/foto', 'Umum::ximipa2foto');
$routes->get('/xi/mipa/2/spidol', 'Umum::ximipa2spidol');
$routes->get('/xi/mipa/2/penghapus', 'Umum::ximipa2penghapus');
$routes->get('/xi/mipa/2/pena', 'Umum::ximipa2pena');
$routes->get('/xi/mipa/2/penggaris', 'Umum::ximipa2penggaris');
$routes->get('/xi/mipa/2/ac', 'Umum::ximipa2ac');
// sarana kelas xi mipa 2 end

// sarana kelas xi mipa 3 start
$routes->get('/xi/mipa/3/buku', 'Umum::ximipa3buku');
$routes->get('/xi/mipa/3/papantulis', 'Umum::ximipa3papanTulis');
$routes->get('/xi/mipa/3/meja', 'Umum::ximipa3meja');
$routes->get('/xi/mipa/3/kursi', 'Umum::ximipa3kursi');
$routes->get('/xi/mipa/3/foto', 'Umum::ximipa3foto');
$routes->get('/xi/mipa/3/spidol', 'Umum::ximipa3spidol');
$routes->get('/xi/mipa/3/penghapus', 'Umum::ximipa3penghapus');
$routes->get('/xi/mipa/3/pena', 'Umum::ximipa3pena');
$routes->get('/xi/mipa/3/penggaris', 'Umum::ximipa3penggaris');
$routes->get('/xi/mipa/3/ac', 'Umum::ximipa3ac');
// sarana kelas xi mipa 3 end

// sarana kelas xi mipa 4 start
$routes->get('/xi/mipa/4/buku', 'Umum::ximipa4buku');
$routes->get('/xi/mipa/4/papantulis', 'Umum::ximipa4papanTulis');
$routes->get('/xi/mipa/4/meja', 'Umum::ximipa4meja');
$routes->get('/xi/mipa/4/kursi', 'Umum::ximipa4kursi');
$routes->get('/xi/mipa/4/foto', 'Umum::ximipa4foto');
$routes->get('/xi/mipa/4/spidol', 'Umum::ximipa4spidol');
$routes->get('/xi/mipa/4/penghapus', 'Umum::ximipa4penghapus');
$routes->get('/xi/mipa/4/pena', 'Umum::ximipa4pena');
$routes->get('/xi/mipa/4/penggaris', 'Umum::ximipa4penggaris');
$routes->get('/xi/mipa/4/ac', 'Umum::ximipa4ac');
// sarana kelas xi mipa 4 end

// sarana kelas xi mipa 5 start
$routes->get('/xi/mipa/5/buku', 'Umum::ximipa5buku');
$routes->get('/xi/mipa/5/papantulis', 'Umum::ximipa5papanTulis');
$routes->get('/xi/mipa/5/meja', 'Umum::ximipa5meja');
$routes->get('/xi/mipa/5/kursi', 'Umum::ximipa5kursi');
$routes->get('/xi/mipa/5/foto', 'Umum::ximipa5foto');
$routes->get('/xi/mipa/5/spidol', 'Umum::ximipa5spidol');
$routes->get('/xi/mipa/5/penghapus', 'Umum::ximipa5penghapus');
$routes->get('/xi/mipa/5/pena', 'Umum::ximipa5pena');
$routes->get('/xi/mipa/5/penggaris', 'Umum::ximipa5penggaris');
$routes->get('/xi/mipa/5/ac', 'Umum::ximipa5ac');
// sarana kelas xi mipa 5 end

// sarana kelas xi mipa 6 start
$routes->get('/xi/mipa/6/buku', 'Umum::ximipa6buku');
$routes->get('/xi/mipa/6/papantulis', 'Umum::ximipa6papanTulis');
$routes->get('/xi/mipa/6/meja', 'Umum::ximipa6meja');
$routes->get('/xi/mipa/6/kursi', 'Umum::ximipa6kursi');
$routes->get('/xi/mipa/6/foto', 'Umum::ximipa6foto');
$routes->get('/xi/mipa/6/spidol', 'Umum::ximipa6spidol');
$routes->get('/xi/mipa/6/penghapus', 'Umum::ximipa6penghapus');
$routes->get('/xi/mipa/6/pena', 'Umum::ximipa6pena');
$routes->get('/xi/mipa/6/penggaris', 'Umum::ximipa6penggaris');
$routes->get('/xi/mipa/6/ac', 'Umum::ximipa6ac');
// sarana kelas xi mipa 6 end

// sarana kelas xi mipa 7 start
$routes->get('/xi/mipa/7/buku', 'Umum::ximipa7buku');
$routes->get('/xi/mipa/7/papantulis', 'Umum::ximipa7papanTulis');
$routes->get('/xi/mipa/7/meja', 'Umum::ximipa7meja');
$routes->get('/xi/mipa/7/kursi', 'Umum::ximipa7kursi');
$routes->get('/xi/mipa/7/foto', 'Umum::ximipa7foto');
$routes->get('/xi/mipa/7/spidol', 'Umum::ximip71spidol');
$routes->get('/xi/mipa/7/penghapus', 'Umum::ximipa7penghapus');
$routes->get('/xi/mipa/7/pena', 'Umum::ximipa7pena');
$routes->get('/xi/mipa/7/penggaris', 'Umum::ximipa7penggaris');
$routes->get('/xi/mipa/7/ac', 'Umum::ximipa7ac');
// sarana kelas xi mipa 7 end

// sarana kelas xi mipa 8 start
$routes->get('/xi/mipa/8/buku', 'Umum::ximipa8buku');
$routes->get('/xi/mipa/8/papantulis', 'Umum::ximipa8papanTulis');
$routes->get('/xi/mipa/8/meja', 'Umum::ximipa8meja');
$routes->get('/xi/mipa/8/kursi', 'Umum::ximipa8kursi');
$routes->get('/xi/mipa/8/foto', 'Umum::ximipa8foto');
$routes->get('/xi/mipa/8/spidol', 'Umum::ximipa8spidol');
$routes->get('/xi/mipa/8/penghapus', 'Umum::ximipa8penghapus');
$routes->get('/xi/mipa/8/pena', 'Umum::ximipa8pena');
$routes->get('/xi/mipa/8/penggaris', 'Umum::ximipa8penggaris');
$routes->get('/xi/mipa/8/ac', 'Umum::ximipa8ac');
// sarana kelas xi mipa 8 end


// ================================================== xi mipa end =====================================================

// ================================================== xi ips start =====================================================

// sarana kelas xi ips 1 start
$routes->get('/xi/ips/1/buku', 'Umum::xiips1buku');
$routes->get('/xi/ips/1/papantulis', 'Umum::xiips1papanTulis');
$routes->get('/xi/ips/1/meja', 'Umum::xiips1meja');
$routes->get('/xi/ips/1/kursi', 'Umum::xiips1kursi');
$routes->get('/xi/ips/1/foto', 'Umum::xiips1foto');
$routes->get('/xi/ips/1/spidol', 'Umum::xiips1spidol');
$routes->get('/xi/ips/1/penghapus', 'Umum::xiips1penghapus');
$routes->get('/xi/ips/1/pena', 'Umum::xiips1pena');
$routes->get('/xi/ips/1/penggaris', 'Umum::xiips1penggaris');
$routes->get('/xi/ips/1/ac', 'Umum::xiips1ac');
// sarana kelas xi ips 1 end


// sarana kelas xi ips 2 start
$routes->get('/xi/ips/2/buku', 'Umum::xiips2buku');
$routes->get('/xi/ips/2/papantulis', 'Umum::xiips2papanTulis');
$routes->get('/xi/ips/2/meja', 'Umum::xiips2meja');
$routes->get('/xi/ips/2/kursi', 'Umum::xiips2kursi');
$routes->get('/xi/ips/2/foto', 'Umum::xiips2foto');
$routes->get('/xi/ips/2/spidol', 'Umum::xiips2spidol');
$routes->get('/xi/ips/2/penghapus', 'Umum::xiips2penghapus');
$routes->get('/xi/ips/2/pena', 'Umum::xiips2pena');
$routes->get('/xi/ips/2/penggaris', 'Umum::xiips2penggaris');
$routes->get('/xi/ips/2/ac', 'Umum::xiips2ac');
// sarana kelas xi ips 2 end


// sarana kelas xi ips 3 start
$routes->get('/xi/ips/3/buku', 'Umum::xiips3buku');
$routes->get('/xi/ips/3/papantulis', 'Umum::xiips3papanTulis');
$routes->get('/xi/ips/3/meja', 'Umum::xiips3meja');
$routes->get('/xi/ips/3/kursi', 'Umum::xiips3kursi');
$routes->get('/xi/ips/3/foto', 'Umum::xiips3foto');
$routes->get('/xi/ips/3/spidol', 'Umum::xiips3spidol');
$routes->get('/xi/ips/3/penghapus', 'Umum::xiips3penghapus');
$routes->get('/xi/ips/3/pena', 'Umum::xiips3pena');
$routes->get('/xi/ips/3/penggaris', 'Umum::xiips3penggaris');
$routes->get('/xi/ips/3/ac', 'Umum::xiips3ac');
// sarana kelas xi ips 3 end


// sarana kelas xi ips 4 start
$routes->get('/xi/ips/4/buku', 'Umum::xiips4buku');
$routes->get('/xi/ips/4/papantulis', 'Umum::xiips4papanTulis');
$routes->get('/xi/ips/4/meja', 'Umum::xiips4meja');
$routes->get('/xi/ips/4/kursi', 'Umum::xiips4kursi');
$routes->get('/xi/ips/4/foto', 'Umum::xiips4foto');
$routes->get('/xi/ips/4/spidol', 'Umum::xiips4spidol');
$routes->get('/xi/ips/4/penghapus', 'Umum::xiips4penghapus');
$routes->get('/xi/ips/4/pena', 'Umum::xiips4pena');
$routes->get('/xi/ips/4/penggaris', 'Umum::xiips4penggaris');
$routes->get('/xi/ips/4/ac', 'Umum::xiips4ac');
// sarana kelas xi ips 4 end

// ================================================== xi ips end =====================================================

// ================================================== xii mipa start =====================================================

// sarana kelas xii mipa 1 start
$routes->get('/xii/mipa/1/buku', 'Umum::xiimipa1buku');
$routes->get('/xii/mipa/1/papantulis', 'Umum::xiimipa1papanTulis');
$routes->get('/xii/mipa/1/meja', 'Umum::xiimipa1meja');
$routes->get('/xii/mipa/1/kursi', 'Umum::xiimipa1kursi');
$routes->get('/xii/mipa/1/foto', 'Umum::ximiipa1foto');
$routes->get('/xii/mipa/1/spidol', 'Umum::xiimipa1spidol');
$routes->get('/xii/mipa/1/penghapus', 'Umum::xiimipa1penghapus');
$routes->get('/xii/mipa/1/pena', 'Umum::xiimipa1pena');
$routes->get('/xii/mipa/1/penggaris', 'Umum::xiimipa1penggaris');
$routes->get('/xii/mipa/1/ac', 'Umum::xiimipa1ac');
// sarana kelas xii mipa 1 end

// sarana kelas xii mipa 2 start
$routes->get('/xii/mipa/2/buku', 'Umum::xiimipa2buku');
$routes->get('/xii/mipa/2/papantulis', 'Umum::xiimipa2papanTulis');
$routes->get('/xii/mipa/2/meja', 'Umum::xiimipa2meja');
$routes->get('/xii/mipa/2/kursi', 'Umum::xiimipa2kursi');
$routes->get('/xii/mipa/2/foto', 'Umum::xiimipa2foto');
$routes->get('/xii/mipa/2/spidol', 'Umum::xiimipa2spidol');
$routes->get('/xii/mipa/2/penghapus', 'Umum::xiimipa2penghapus');
$routes->get('/xii/mipa/2/pena', 'Umum::xiimipa2pena');
$routes->get('/xii/mipa/2/penggaris', 'Umum::xiimipa2penggaris');
$routes->get('/xii/mipa/2/ac', 'Umum::xiimipa2ac');
// sarana kelas xii mipa 2 end

// sarana kelas xii mipa 3 start
$routes->get('/xii/mipa/3/buku', 'Umum::xiimipa3buku');
$routes->get('/xii/mipa/3/papantulis', 'Umum::xiimipa3papanTulis');
$routes->get('/xii/mipa/3/meja', 'Umum::xiimipa3meja');
$routes->get('/xii/mipa/3/kursi', 'Umum::xiimipa3kursi');
$routes->get('/xii/mipa/3/foto', 'Umum::xiimipa3foto');
$routes->get('/xii/mipa/3/spidol', 'Umum::xiimipa3spidol');
$routes->get('/xii/mipa/3/penghapus', 'Umum::xiimipa3penghapus');
$routes->get('/xii/mipa/3/pena', 'Umum::xiimipa3pena');
$routes->get('/xii/mipa/3/penggaris', 'Umum::xiimipa3penggaris');
$routes->get('/xii/mipa/3/ac', 'Umum::xiimipa3ac');
// sarana kelas xii mipa 3 end

// sarana kelas xii mipa 4 start
$routes->get('/xii/mipa/4/buku', 'Umum::xiimipa4buku');
$routes->get('/xii/mipa/4/papantulis', 'Umum::xiimipa4papanTulis');
$routes->get('/xii/mipa/4/meja', 'Umum::xiimipa4meja');
$routes->get('/xii/mipa/4/kursi', 'Umum::xiimipa4kursi');
$routes->get('/xii/mipa/4/foto', 'Umum::xiimipa4foto');
$routes->get('/xii/mipa/4/spidol', 'Umum::xiimipa4spidol');
$routes->get('/xii/mipa/4/penghapus', 'Umum::xiimipa4penghapus');
$routes->get('/xii/mipa/4/pena', 'Umum::xiimipa4pena');
$routes->get('/xii/mipa/4/penggaris', 'Umum::xiimipa4penggaris');
$routes->get('/xii/mipa/4/ac', 'Umum::xiimipa4ac');
// sarana kelas xii mipa 4 end

// sarana kelas xii mipa 5 start
$routes->get('/xii/mipa/5/buku', 'Umum::xiimipa5buku');
$routes->get('/xii/mipa/5/papantulis', 'Umum::xiimipa5papanTulis');
$routes->get('/xii/mipa/5/meja', 'Umum::xiimipa5meja');
$routes->get('/xii/mipa/5/kursi', 'Umum::xiimipa5kursi');
$routes->get('/xii/mipa/5/foto', 'Umum::xiimipa5foto');
$routes->get('/xii/mipa/5/spidol', 'Umum::xiimipa5spidol');
$routes->get('/xii/mipa/5/penghapus', 'Umum::xiimipa5penghapus');
$routes->get('/xii/mipa/5/pena', 'Umum::xiimipa5pena');
$routes->get('/xii/mipa/5/penggaris', 'Umum::xiimipa5penggaris');
$routes->get('/xii/mipa/5/ac', 'Umum::xiimipa5ac');
// sarana kelas xii mipa 5 end

// sarana kelas xi mipa 6 start
$routes->get('/xii/mipa/6/buku', 'Umum::xiimipa6buku');
$routes->get('/xii/mipa/6/papantulis', 'Umum::xiimipa6papanTulis');
$routes->get('/xii/mipa/6/meja', 'Umum::xiimipa6meja');
$routes->get('/xii/mipa/6/kursi', 'Umum::xiimipa6kursi');
$routes->get('/xii/mipa/6/foto', 'Umum::xiimipa6foto');
$routes->get('/xii/mipa/6/spidol', 'Umum::xiimipa6spidol');
$routes->get('/xii/mipa/6/penghapus', 'Umum::xiimipa6penghapus');
$routes->get('/xii/mipa/6/pena', 'Umum::xiimipa6pena');
$routes->get('/xii/mipa/6/penggaris', 'Umum::xiimipa6penggaris');
$routes->get('/xii/mipa/6/ac', 'Umum::xiimipa6ac');
// sarana kelas xii mipa 6 end

// sarana kelas xii mipa 7 start
$routes->get('/xii/mipa/7/buku', 'Umum::xiimipa7buku');
$routes->get('/xii/mipa/7/papantulis', 'Umum::xiimipa7papanTulis');
$routes->get('/xii/mipa/7/meja', 'Umum::xiimipa7meja');
$routes->get('/xii/mipa/7/kursi', 'Umum::xiimipa7kursi');
$routes->get('/xii/mipa/7/foto', 'Umum::xiimipa7foto');
$routes->get('/xii/mipa/7/spidol', 'Umum::xiimip71spidol');
$routes->get('/xii/mipa/7/penghapus', 'Umum::xiimipa7penghapus');
$routes->get('/xii/mipa/7/pena', 'Umum::xiimipa7pena');
$routes->get('/xii/mipa/7/penggaris', 'Umum::xiimipa7penggaris');
$routes->get('/xii/mipa/7/ac', 'Umum::xiimipa7ac');
// sarana kelas xii mipa 7 end

// sarana kelas xii mipa 8 start
$routes->get('/xii/mipa/8/buku', 'Umum::xiimipa8buku');
$routes->get('/xii/mipa/8/papantulis', 'Umum::xiimipa8papanTulis');
$routes->get('/xii/mipa/8/meja', 'Umum::xiimipa8meja');
$routes->get('/xii/mipa/8/kursi', 'Umum::xiimipa8kursi');
$routes->get('/xii/mipa/8/foto', 'Umum::xiimipa8foto');
$routes->get('/xii/mipa/8/spidol', 'Umum::xiimipa8spidol');
$routes->get('/xii/mipa/8/penghapus', 'Umum::xiimipa8penghapus');
$routes->get('/xii/mipa/8/pena', 'Umum::xiimipa8pena');
$routes->get('/xii/mipa/8/penggaris', 'Umum::xiimipa8penggaris');
$routes->get('/xii/mipa/8/ac', 'Umum::xiimipa8ac');
// sarana kelas xii mipa 8 end


// ================================================== xii mipa end =====================================================



// ================================================== xii ips start =====================================================

// sarana kelas xii ips 1 start
$routes->get('/xii/ips/1/buku', 'Umum::xiiips1buku');
$routes->get('/xii/ips/1/papantulis', 'Umum::xiiips1papanTulis');
$routes->get('/xii/ips/1/meja', 'Umum::xiiips1meja');
$routes->get('/xii/ips/1/kursi', 'Umum::xiiips1kursi');
$routes->get('/xii/ips/1/foto', 'Umum::xiiips1foto');
$routes->get('/xii/ips/1/spidol', 'Umum::xiiips1spidol');
$routes->get('/xii/ips/1/penghapus', 'Umum::xiiips1penghapus');
$routes->get('/xii/ips/1/pena', 'Umum::xiiips1pena');
$routes->get('/xii/ips/1/penggaris', 'Umum::xiiips1penggaris');
$routes->get('/xii/ips/1/ac', 'Umum::xiiips1ac');
// sarana kelas xii ips 1 end


// sarana kelas xii ips 2 start
$routes->get('/xii/ips/2/buku', 'Umum::xiiips2buku');
$routes->get('/xii/ips/2/papantulis', 'Umum::xiiips2papanTulis');
$routes->get('/xii/ips/2/meja', 'Umum::xiiips2meja');
$routes->get('/xii/ips/2/kursi', 'Umum::xiiips2kursi');
$routes->get('/xii/ips/2/foto', 'Umum::xiiips2foto');
$routes->get('/xii/ips/2/spidol', 'Umum::xiiips2spidol');
$routes->get('/xii/ips/2/penghapus', 'Umum::xiiips2penghapus');
$routes->get('/xii/ips/2/pena', 'Umum::xiiips2pena');
$routes->get('/xii/ips/2/penggaris', 'Umum::xiiips2penggaris');
$routes->get('/xii/ips/2/ac', 'Umum::xiiips2ac');
// sarana kelas xii ips 2 end


// sarana kelas xii ips 3 start
$routes->get('/xii/ips/3/buku', 'Umum::xiiips3buku');
$routes->get('/xii/ips/3/papantulis', 'Umum::xiiips3papanTulis');
$routes->get('/xii/ips/3/meja', 'Umum::xiiips3meja');
$routes->get('/xii/ips/3/kursi', 'Umum::xiiips3kursi');
$routes->get('/xii/ips/3/foto', 'Umum::xiiips3foto');
$routes->get('/xii/ips/3/spidol', 'Umum::xiiips3spidol');
$routes->get('/xii/ips/3/penghapus', 'Umum::xiiips3penghapus');
$routes->get('/xii/ips/3/pena', 'Umum::xiiips3pena');
$routes->get('/xii/ips/3/penggaris', 'Umum::xiiips3penggaris');
$routes->get('/xii/ips/3/ac', 'Umum::xiiips3ac');
// sarana kelas xii ips 3 end


// sarana kelas xii ips 4 start
$routes->get('/xii/ips/4/buku', 'Umum::xiiips4buku');
$routes->get('/xii/ips/4/papantulis', 'Umum::xiiips4papanTulis');
$routes->get('/xii/ips/4/meja', 'Umum::xiiips4meja');
$routes->get('/xii/ips/4/kursi', 'Umum::xiiips4kursi');
$routes->get('/xii/ips/4/foto', 'Umum::xiiips4foto');
$routes->get('/xii/ips/4/spidol', 'Umum::xiiips4spidol');
$routes->get('/xii/ips/4/penghapus', 'Umum::xiiips4penghapus');
$routes->get('/xii/ips/4/pena', 'Umum::xiiips4pena');
$routes->get('/xii/ips/4/penggaris', 'Umum::xiiips4penggaris');
$routes->get('/xii/ips/4/ac', 'Umum::xiiips4ac');
// sarana kelas xii ips 4 end

// ================================================== xii ips end =====================================================

// sarana Aula start
$routes->get('/aula/meja', 'Umum::aulameja');
$routes->get('/aula/kursi', 'Umum::aulakursi');
$routes->get('/aula/piala', 'Umum::aulapiala');
$routes->get('/aula/lemari', 'Umum::aulalemari');
$routes->get('/aula/kipas_angin', 'Umum::aulakipasangin');
// sarana Aula end

// sarana masjid start
$routes->get('/masjid/buku', 'Umum::masjidbuku');
$routes->get('/masjid/meja', 'Umum::masjidmeja');
$routes->get('/masjid/tirai', 'Umum::masjidtirai');
// sarana masjid end

// sarana satpam start
$routes->get('/satpam/meja', 'Umum::satpammeja');
$routes->get('/satpam/kursi', 'Umum::satpamkursi');
$routes->get('/satpam/jam', 'Umum::satpamjam');
// sarana satpam end

// sarana kepsek start
$routes->get('/ruangan/kepsek/buku', 'Umum::kepsekbuku');
$routes->get('/ruangan/kepsek/meja', 'Umum::kepsekmeja');
$routes->get('/ruangan/kepsek/kursi', 'Umum::kepsekkursi');
$routes->get('/ruangan/kepsek/foto', 'Umum::kepsekfoto');
$routes->get('/ruangan/kepsek/pena', 'Umum::kepsekpena');
$routes->get('/ruangan/kepsek/penggaris', 'Umum::kepsekpenggaris');
$routes->get('/ruangan/kepsek/ac', 'Umum::kepsekac');
// sarana kepsek end

// sarana waka kurikulum start
$routes->get('/ruangan/waka/kurikulum/buku', 'Umum::kurikulumbuku');
$routes->get('/ruangan/waka/kurikulum/meja', 'Umum::kurikulummeja');
$routes->get('/ruangan/waka/kurikulum/kursi', 'Umum::kurikulumkursi');
$routes->get('/ruangan/waka/kurikulum/foto', 'Umum::kurikulumfoto');
$routes->get('/ruangan/waka/kurikulum/pena', 'Umum::kurikulumpena');
$routes->get('/ruangan/waka/kurikulum/penggaris', 'Umum::kurikulumpenggaris');
$routes->get('/ruangan/waka/kurikulum/ac', 'Umum::kurikulumac');
// sarana waka kurikulum end

// sarana waka kesiswaan start
$routes->get('/ruangan/waka/kesiswaan/buku', 'Umum::kesiswaanbuku');
$routes->get('/ruangan/waka/kesiswaan/meja', 'Umum::kesiswaanmeja');
$routes->get('/ruangan/waka/kesiswaan/kursi', 'Umum::kesiswaankursi');
$routes->get('/ruangan/waka/kesiswaan/foto', 'Umum::kesiswaanfoto');
$routes->get('/ruangan/waka/kesiswaan/pena', 'Umum::kesiswaanpena');
$routes->get('/ruangan/waka/kesiswaan/penggaris', 'Umum::kesiswaanpenggaris');
$routes->get('/ruangan/waka/kesiswaan/ac', 'Umum::kesiswaanac');
// sarana waka kesiswaan end

// sarana waka sarpras start
$routes->get('/ruangan/waka/sarpras/buku', 'Umum::sarprasbuku');
$routes->get('/ruangan/waka/sarpras/meja', 'Umum::sarprasmeja');
$routes->get('/ruangan/waka/sarpras/kursi', 'Umum::sarpraskursi');
$routes->get('/ruangan/waka/sarpras/foto', 'Umum::sarprasfoto');
$routes->get('/ruangan/waka/sarpras/pena', 'Umum::sarpraspena');
$routes->get('/ruangan/waka/sarpras/penggaris', 'Umum::sarpraspenggaris');
$routes->get('/ruangan/waka/sarpras/ac', 'Umum::sarprasac');
// sarana waka sarpras end

// sarana waka humas start
$routes->get('/ruangan/waka/humas/buku', 'Umum::humasbuku');
$routes->get('/ruangan/waka/humas/meja', 'Umum::humasmeja');
$routes->get('/ruangan/waka/humas/kursi', 'Umum::humaskursi');
$routes->get('/ruangan/waka/humas/foto', 'Umum::humasfoto');
$routes->get('/ruangan/waka/humas/pena', 'Umum::humaspena');
$routes->get('/ruangan/waka/humas/penggaris', 'Umum::humaspenggaris');
$routes->get('/ruangan/waka/humas/ac', 'Umum::humasac');
// sarana waka humas end

// sarana guru start
$routes->get('/ruangan/guru/buku', 'Umum::gurubuku');
$routes->get('/ruangan/guru/meja', 'Umum::gurumeja');
$routes->get('/ruangan/guru/kursi', 'Umum::gurukursi');
$routes->get('/ruangan/guru/foto', 'Umum::gurufoto');
$routes->get('/ruangan/guru/pena', 'Umum::gurupena');
$routes->get('/ruangan/guru/penggaris', 'Umum::gurupenggaris');
$routes->get('/ruangan/guru/ac', 'Umum::guruac');
// sarana guru end

// sarana bk start
$routes->get('/ruangan/bk/buku', 'Umum::bkbuku');
$routes->get('/ruangan/bk/meja', 'Umum::bkmeja');
$routes->get('/ruangan/bk/kursi', 'Umum::bkkursi');
$routes->get('/ruangan/bk/foto', 'Umum::bkfoto');
$routes->get('/ruangan/bk/pena', 'Umum::bkpena');
$routes->get('/ruangan/bk/penggaris', 'Umum::bkpenggaris');
$routes->get('/ruangan/bk/ac', 'Umum::bkac');
// sarana bk end

// sarana uks start
$routes->get('/ruangan/uks/buku', 'Umum::uksbuku');
$routes->get('/ruangan/uks/meja', 'Umum::uksmeja');
$routes->get('/ruangan/uks/kursi', 'Umum::ukskursi');
$routes->get('/ruangan/uks/foto', 'Umum::uksfoto');
$routes->get('/ruangan/uks/pena', 'Umum::ukspena');
$routes->get('/ruangan/uks/penggaris', 'Umum::ukspenggaris');
$routes->get('/ruangan/uks/ac', 'Umum::uksac');
// sarana uks end

// sarana tu start
$routes->get('/ruangan/tu/buku', 'Umum::tubuku');
$routes->get('/ruangan/tu/meja', 'Umum::tumeja');
$routes->get('/ruangan/tu/kursi', 'Umum::tukursi');
$routes->get('/ruangan/tu/foto', 'Umum::tufoto');
$routes->get('/ruangan/tu/pena', 'Umum::tupena');
$routes->get('/ruangan/tu/penggaris', 'Umum::tupenggaris');
$routes->get('/ruangan/tu/ac', 'Umum::tuac');
// sarana tu end

// sarana koker start
$routes->get('/ruangan/koker/buku', 'Umum::kokerbuku');
$routes->get('/ruangan/koker/meja', 'Umum::kokermeja');
$routes->get('/ruangan/koker/kursi', 'Umum::kokerkursi');
$routes->get('/ruangan/koker/foto', 'Umum::kokerfoto');
$routes->get('/ruangan/koker/pena', 'Umum::kokerpena');
$routes->get('/ruangan/koker/penggaris', 'Umum::kokerpenggaris');
$routes->get('/ruangan/koker/ac', 'Umum::kokerac');
// sarana koker end

// sarana bahasa start
$routes->get('/ruangan/bahasa/buku', 'Umum::bahasabuku');
$routes->get('/ruangan/bahasa/meja', 'Umum::bahasameja');
$routes->get('/ruangan/bahasa/kursi', 'Umum::bahasakursi');
$routes->get('/ruangan/bahasa/foto', 'Umum::bahasafoto');
$routes->get('/ruangan/bahasa/pena', 'Umum::bahasapena');
$routes->get('/ruangan/bahasa/penggaris', 'Umum::bahasapenggaris');
// sarana bahasa end

// sarana kimia start
$routes->get('/ruangan/kimia/buku', 'Umum::kimiabuku');
$routes->get('/ruangan/kimia/meja', 'Umum::kimiameja');
$routes->get('/ruangan/kimia/kursi', 'Umum::kimiakursi');
$routes->get('/ruangan/kimia/foto', 'Umum::kimiafoto');
$routes->get('/ruangan/kimia/pena', 'Umum::kimiapena');
$routes->get('/ruangan/kimia/penggaris', 'Umum::kimiapenggaris');
// sarana kimia end

// sarana biologi start
$routes->get('/ruangan/biologi/buku', 'Umum::biologibuku');
$routes->get('/ruangan/biologi/meja', 'Umum::biologimeja');
$routes->get('/ruangan/biologi/kursi', 'Umum::biologikursi');
$routes->get('/ruangan/biologi/foto', 'Umum::biologifoto');
$routes->get('/ruangan/biologi/pena', 'Umum::biologipena');
$routes->get('/ruangan/biologi/penggaris', 'Umum::biologipenggaris');
// sarana biologi end

// sarana fisika start
$routes->get('/ruangan/fisika/buku', 'Umum::fisikabuku');
$routes->get('/ruangan/fisika/meja', 'Umum::fisikameja');
$routes->get('/ruangan/fisika/kursi', 'Umum:fisikarkursi');
$routes->get('/ruangan/fisika/foto', 'Umum::fisikafoto');
$routes->get('/ruangan/fisika/pena', 'Umum::fisikapena');
$routes->get('/ruangan/fisika/penggaris', 'Umum::fisikapenggaris');
// sarana fisika end

// sarana dapur start
$routes->get('/ruangan/dapur/buku', 'Umum::dapurbuku');
$routes->get('/ruangan/dapur/meja', 'Umum::dapurmeja');
$routes->get('/ruangan/dapur/kursi', 'Umum::dapurkursi');
$routes->get('/ruangan/dapur/foto', 'Umum::dapurfoto');
$routes->get('/ruangan/dapur/pena', 'Umum::dapurpena');
$routes->get('/ruangan/dapur/penggaris', 'Umum::dapurpenggaris');
// sarana dapur end





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
