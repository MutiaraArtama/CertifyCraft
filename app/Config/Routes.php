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

$routes->resource('login');
$routes->resource('logout');
$routes->group('', ['filter' => 'authMiddleware'], function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('/apply/(:segment)', 'Admin::apply/$1');
    $routes->get('Admin/upload', 'Admin::create');
    $routes->post('Admin/save', 'Admin::save');
    $routes->post('Admin/update/(:segment)', 'Admin::update/$1');
    $routes->resource('Admin');
    $routes->resource('userdata');
    $routes->get('/export', 'Admin::exportToCSV');
    $routes->get('/viewpdf', 'Admin::viewpdf');
    $routes->resource('register');
});

$routes->get('/user', 'User::index');;
$routes->get('/user/home', 'User::index');
$routes->get('/user/about', 'User::about');
$routes->get('/user/formulir', 'User::formulir');
$routes->get('/user/terkirim', 'User::selesai');
$routes->get('/Form', 'Form::index');
$routes->post('/user/save', 'Form::save');
$routes->get('/apply/(:segment)', 'Form::apply/$1');

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