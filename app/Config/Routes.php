<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/admin', 'Admin/AdminController::index');
$routes->get('/admin/icons', 'Admin/AdminController::icons');
$routes->get('/admin/map', 'Admin/AdminController::map');
$routes->get('/admin/notifications', 'Admin/AdminController::notifications');
$routes->get('/admin/rtl', 'Admin/AdminController::rtl');
$routes->get('/admin/tables', 'Admin/AdminController::tables');
$routes->get('/admin/typography', 'Admin/AdminController::typography');
$routes->get('/admin/upgrade', 'Admin/AdminController::upgrade');
$routes->get('/admin/user', 'Admin/AdminController::user');

$routes->get('/generos_musicais/save','Generos_musicais::save');
$routes->get('/generos_musicais', 'Generos_musicais::index');
$routes->get('/composers/save','Compositores::salvar');
$routes->get('/composers','Compositores::index');
$routes->get('/', 'Home::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
