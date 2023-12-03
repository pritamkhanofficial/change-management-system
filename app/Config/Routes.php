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
//$routes->setDefaultController('Home');
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
$routes->get('/', 'AuthController::login');
$routes->match(['get', 'post'], 'login', 'AuthController::login');
$routes->match(['get','post'], 'user_login', 'WebsiteController::userlogin');
$routes->match(['get','post'], 'useraccount', 'WebsiteController::myaccount');

// DASHBOARD
// $routes->get('dashboard/home', 'Auth::dashboard');

$routes->group('admin', ['filter' => 'authFilter'],  static function ($routes) {
    $routes->get('dashboard', 'DashboardController::index');
    $routes->get('logout', 'AuthController::logout');
    //$routes->get('category', 'MasterController::category');
});
$routes->group('master', ['filter' => 'authFilter'], static function ($routes) {
    $routes->match(['get', 'post'],'category/', 'MasterController::category');
    $routes->match(['get', 'post'],'category/(:any)', 'MasterController::category/$1');
    $routes->match(['get', 'post'],'category/(:any)/(:any)', 'MasterController::category/$1/$2');
    $routes->match(['get', 'post'], 'category/(:any)/(:any)/(:any)', 'MasterController::category/$1/$2/$3');

    $routes->match(['get', 'post'],'sub-category/', 'MasterController::sub_category');
    $routes->match(['get', 'post'],'sub-category/(:any)', 'MasterController::sub_category/$1');
    $routes->match(['get', 'post'],'sub-category/(:any)/(:any)', 'MasterController::sub_category/$1/$2');
    $routes->match(['get', 'post'], 'sub-category/(:any)/(:any)/(:any)', 'MasterController::sub_category/$1/$2/$3');

    $routes->match(['get', 'post'],'country/', 'MasterController::country');
    $routes->match(['get', 'post'],'country/(:any)', 'MasterController::country/$1');
    $routes->match(['get', 'post'],'country/(:any)/(:any)', 'MasterController::country/$1/$2');
    $routes->match(['get', 'post'], 'country/(:any)/(:any)/(:any)', 'MasterController::country/$1/$2/$3');

    $routes->match(['get', 'post'],'state/', 'MasterController::state');
    $routes->match(['get', 'post'],'state/(:any)', 'MasterController::state/$1');
    $routes->match(['get', 'post'],'state/(:any)/(:any)', 'MasterController::state/$1/$2');
    $routes->match(['get', 'post'], 'state/(:any)/(:any)/(:any)', 'MasterController::state/$1/$2/$3');

    $routes->match(['get', 'post'],'unit/', 'MasterController::unit');
    $routes->match(['get', 'post'],'unit/(:any)', 'MasterController::unit/$1');
    $routes->match(['get', 'post'],'unit/(:any)/(:any)', 'MasterController::unit/$1/$2');
    $routes->match(['get', 'post'], 'unit/(:any)/(:any)/(:any)', 'MasterController::unit/$1/$2/$3');

});

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

// $routes->get('/', 'AuthController::index');
/* $routes->group('admin', static function ($routes) {
    $routes->match(['get', 'post'], '/', 'AuthController::login');
}); */