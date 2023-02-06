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
