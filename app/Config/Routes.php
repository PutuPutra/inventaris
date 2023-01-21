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
$routes->get('/komputer', 'Admin::komputer', ['filter' => 'login']);
// $routes->get('/signin', 'Admin::signin');
$routes->get('/tambahkomputer', 'Admin::tambahkomputer', ['filter' => 'login']);
// $routes->post('/kirim_komputer', 'Admin::kirim_komputer');
// $routes->get('/hapus_komputer/(:num)', 'adminController::hapus_komputer/$1');



$routes->get('/', 'Umum::index');
$routes->get('/kontak', 'Umum::kontak');
$routes->get('/tentang', 'Umum::tentang');

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
$routes->post('/store', 'laptopController::store', ['filter' => 'login']);
$routes->post('/buku/store', 'bukuController::store', ['filter' => 'login']);
$routes->post('/papanTulis/store', 'papanTulisController::store', ['filter' => 'login']);

$routes->get('/computer', 'Admin::computer', ['filter' => 'login']);

// laptop
$routes->get('/komputer', 'laptopController::komputer', ['filter' => 'login']);
$routes->get('/editnya', 'laptopController::editnya', ['filter' => 'login']);
$routes->get('/tambahLaptop', 'laptopController::tambahLaptop', ['filter' => 'login']);
$routes->get('/deleted/(:num)', 'laptopController::deleted/$1', ['filter' => 'login']);
$routes->post('/updateKomputer', 'laptopController::updateKomputer', ['filter' => 'login']);
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
