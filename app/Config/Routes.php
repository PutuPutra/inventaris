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
// sarana kelas x 1

// sarana kelas x 2
$routes->get('/x/2/buku', 'Umum::x2buku');
$routes->get('/x/2/papan_tulis', 'Umum::x2papanTulis');
$routes->get('/x/2/meja', 'Umum::x2meja');
$routes->get('/x/2/kursi', 'Umum::x2kursi');
$routes->get('/x/2/foto', 'Umum::x2foto');
$routes->get('/x/2/spidol', 'Umum::x2spidol');
$routes->get('/x/2/penghapus', 'Umum::x2penghapus');
$routes->get('/x/2/pena', 'Umum::x2pena');
$routes->get('/x/2/penggaris', 'Umum::x2penggaris');
// sarana kelas x 2

// sarana kelas x 3
$routes->get('/x/3/buku', 'Umum::x3buku');
$routes->get('/x/3/papan_tulis', 'Umum::x3papanTulis');
$routes->get('/x/3/meja', 'Umum::x3meja');
$routes->get('/x/3/kursi', 'Umum::x3kursi');
$routes->get('/x/3/foto', 'Umum::x3foto');
$routes->get('/x/3/spidol', 'Umum::x3spidol');
$routes->get('/x/3/penghapus', 'Umum::x3penghapus');
$routes->get('/x/3/pena', 'Umum::x3pena');
$routes->get('/x/3/penggaris', 'Umum::x3penggaris');
// sarana kelas x 3

// sarana kelas x 4
$routes->get('/x/4/buku', 'Umum::x4buku');
$routes->get('/x/4/papan_tulis', 'Umum::x4papanTulis');
$routes->get('/x/4/meja', 'Umum::x1meja');
$routes->get('/x/4/kursi', 'Umum::x4kursi');
$routes->get('/x/4/foto', 'Umum::x4foto');
$routes->get('/x/4/spidol', 'Umum::x4spidol');
$routes->get('/x/4/penghapus', 'Umum::x4penghapus');
$routes->get('/x/4/pena', 'Umum::x4pena');
$routes->get('/x/4/penggaris', 'Umum::x4penggaris');
// sarana kelas x 4

// sarana kelas x 5
$routes->get('/x/5/buku', 'Umum::x5buku');
$routes->get('/x/5/papan_tulis', 'Umum::x5papanTulis');
$routes->get('/x/5/meja', 'Umum::x5meja');
$routes->get('/x/5/kursi', 'Umum::x5kursi');
$routes->get('/x/5/foto', 'Umum::x5foto');
$routes->get('/x/5/spidol', 'Umum::x5spidol');
$routes->get('/x/5/penghapus', 'Umum::x5penghapus');
$routes->get('/x/5/pena', 'Umum::x5pena');
$routes->get('/x/5/penggaris', 'Umum::x5penggaris');
// sarana kelas x 5

// sarana kelas x 6
$routes->get('/x/6/buku', 'Umum::x6buku');
$routes->get('/x/6/papan_tulis', 'Umum::x6papanTulis');
$routes->get('/x/6/meja', 'Umum::x6meja');
$routes->get('/x/6/kursi', 'Umum::x6kursi');
$routes->get('/x/6/foto', 'Umum::x6foto');
$routes->get('/x/6/spidol', 'Umum::x6spidol');
$routes->get('/x/6/penghapus', 'Umum::x6penghapus');
$routes->get('/x/6/pena', 'Umum::x6pena');
$routes->get('/x/6/penggaris', 'Umum::x6penggaris');
// sarana kelas x 6

// sarana kelas x 7
$routes->get('/x/7/buku', 'Umum::x7buku');
$routes->get('/x/7/papan_tulis', 'Umum::x7papanTulis');
$routes->get('/x/7/meja', 'Umum::x7meja');
$routes->get('/x/7/kursi', 'Umum::x7kursi');
$routes->get('/x/7/foto', 'Umum::x7foto');
$routes->get('/x/7/spidol', 'Umum::x7spidol');
$routes->get('/x/7/penghapus', 'Umum::x7penghapus');
$routes->get('/x/7/pena', 'Umum::x7pena');
$routes->get('/x/7/penggaris', 'Umum::x7penggaris');
// sarana kelas x 7

// sarana kelas x 8
$routes->get('/x/8/buku', 'Umum::x8buku');
$routes->get('/x/8/papan_tulis', 'Umum::x8papanTulis');
$routes->get('/x/8/meja', 'Umum::x8meja');
$routes->get('/x/8/kursi', 'Umum::x8kursi');
$routes->get('/x/8/foto', 'Umum::x8foto');
$routes->get('/x/8/spidol', 'Umum::x8spidol');
$routes->get('/x/8/penghapus', 'Umum::x8penghapus');
$routes->get('/x/8/pena', 'Umum::x8pena');
$routes->get('/x/8/penggaris', 'Umum::x8penggaris');
// sarana kelas x 8

// sarana kelas x 9
$routes->get('/x/9/buku', 'Umum::x9buku');
$routes->get('/x/9/papan_tulis', 'Umum::x9papanTulis');
$routes->get('/x/9/meja', 'Umum::x9meja');
$routes->get('/x/9/kursi', 'Umum::x9kursi');
$routes->get('/x/9/foto', 'Umum::x9foto');
$routes->get('/x/9/spidol', 'Umum::x9spidol');
$routes->get('/x/9/penghapus', 'Umum::x9penghapus');
$routes->get('/x/9/pena', 'Umum::x9pena');
$routes->get('/x/9/penggaris', 'Umum::x9penggaris');
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
// sarana kelas x 10

// sarana kelas x 11
$routes->get('/x/11/buku', 'Umum::x11buku');
$routes->get('/x/11/papan_tulis', 'Umum::x11papanTulis');
$routes->get('/x/11/meja', 'Umum::x11meja');
$routes->get('/x/11/kursi', 'Umum::x11kursi');
$routes->get('/x/11/foto', 'Umum::x11foto');
$routes->get('/x/11/spidol', 'Umum::x11spidol');
$routes->get('/x/11/penghapus', 'Umum::x11penghapus');
$routes->get('/x/11/pena', 'Umum::x11pena');
$routes->get('/x/11/penggaris', 'Umum::x11penggaris');
// sarana kelas x 11










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
