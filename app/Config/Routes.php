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
$routes->get('/', 'Home::index');
// $routes->get('/login', 'Login::index');
    $routes->get('login', 'LoginController::index');
    $routes->post('login', 'LoginController::index');
    $routes->get('logout', 'LoginController::logout');
//get ruang
    $routes->get('camar-atas', 'Home::CamarAtas');
    $routes->get('camar-bawah', 'Home::CamarBawah');
    $routes->get('cendrawasih-atas', 'Home::CendrawasihAtas');
    $routes->get('cendrawasih-bawah', 'Home::CendrawasihBawah');
    $routes->get('icu', 'Home::ICU');
    $routes->get('igd', 'Home::IGD');
    $routes->get('kenari-atas', 'Home::KenariAtas');
    $routes->get('kenari-bawah', 'Home::KenariBawah');
    $routes->get('kapodang-atas', 'Home::KapodangAtas');
    $routes->get('kapodang-bawah', 'Home::KapodangBawah');
    $routes->get('nuri', 'Home::Nuri');
    $routes->get('perinatologi', 'Home::Perinatologi');
    $routes->get('vk', 'Home::VK');
//get kelas
    $routes->get('kelas1', 'Home::Kelas1');
    $routes->get('kelas2', 'Home::Kelas2');
    $routes->get('kelas3', 'Home::Kelas3');
//pasien
    $routes->get('detailpasien1', 'DetailPasienController::kelas1');
    $routes->get('detailpasien2', 'DetailPasienController::kelas2');
    $routes->get('detailpasien3', 'DetailPasienController::kelas3');

$routes->get('inputpasien', 'Home::InputPasien');

$routes->get('tambahpasien', 'TambahPasienController::index');
$routes->post('tambahpasien/store', 'TambahPasienController::store');
$routes->get('tambahpasien/success', 'TambahPasienController::success');

$routes->get('pasien/delete/(:num)', 'HapusPasienController::delete/$1');

$routes->get('insertceklist', 'InsertCeklistController::index');
$routes->post('insertceklist/save1', 'InsertCeklistController::save1');
$routes->post('insertceklist/save2', 'InsertCeklistController::save2');
$routes->post('insertceklist/save3', 'InsertCeklistController::save3');

// app/Config/Routes.php

// $routes->post('dxpasien/view', 'DetailPasienController::DXView');


// $routes->get('detailpasien1/(:segment)', 'DetailPasienController::detailpasien1/$1');
// $routes->get('detailpasien2/(:segment)', 'DetailPasienController::detailpasien2/$1');
// $routes->get('detailpasien3/(:segment)', 'DetailPasienController::detailpasien3/$1');




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
