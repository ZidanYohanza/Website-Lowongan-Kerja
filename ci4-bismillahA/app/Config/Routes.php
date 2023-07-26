<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
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
$routes->match(['get','post'],'/', 'Auth::index');
$routes->get('logout','Auth::logout');
$routes->get('login','Auth::login');
$routes->get('register','Auth::register');
$routes->match(['get','post'], 'registerPerusahaan', 'Auth::registerPerusahaan');
$routes->match(['get','post'], 'registerPekerja', 'Auth::registerPekerja');
$routes->match(['get','post'], 'registerAdmin', 'Auth::registerAdmin');

$routes->get('dashPek','Dashboard::dashPekerja',['filter' => 'auth']);
$routes->get('dashPer','Dashboard::dashPerusahaan',['filter' => 'auth']);
$routes->get('dashAdm','Dashboard::dashAdmin',['filter' => 'auth']);

$routes->get('/indexPerusahaan', 'Perusahaan::index');
$routes->get('/editPerusahaan/(:num)','Perusahaan::edit/$1');
$routes->post('/editPerusahaan/(:num)','Perusahaan::update/$1');
$routes->post('/savePerusahaan','Perusahaan::save');
$routes->get('/indexPekerja', 'Pekerja::index');
$routes->post('/savePekerja','Pekerja::save');
$routes->get('/editPekerja/(:num)','Pekerja::edit/$1');
$routes->post('/editPekerja/(:num)','Pekerja::update/$1');
$routes->get('/deletePerusahaan/(:num)','Perusahaan::delete/$1');
$routes->get('/deletePekerja/(:num)','Pekerja::delete/$1');

$routes->get('/indexLowongan', 'Lowongan::index');
$routes->get('/editLowongan/(:num)','Lowongan::edit/$1');
$routes->post('/editLowongan/(:num)','Lowongan::update/$1');
$routes->post('/saveLowongan','Lowongan::save');
$routes->get('/deleteLowongan/(:num)','Lowongan::delete/$1');

$routes->get('/indexResume', 'Resume::index');
$routes->get('/editResume/(:num)','Resume::edit/$1');
$routes->post('/editResume/(:num)','Resume::update/$1');
$routes->post('/saveResume','Resume::save');
$routes->get('/deleteResume/(:num)','Resume::delete/$1');

$routes->get('/indexDaftarLowongan', 'DaftarLowongan::index');
$routes->get('/listLowong/(:num)','DaftarLowongan::edit/$1');
$routes->post('/listLowong/(:num)','DaftarLowongan::update/$1');
$routes->post('/saveDaftarLowongan','DaftarLowongan::save');

$routes->post('/confirm','DaftarLowongan::confirm');

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
