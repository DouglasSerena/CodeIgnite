<?php

namespace Config;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
  require SYSTEMPATH . 'Config/Routes.php';
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Site::index');
$routes->get('/home', 'Site::view/home');
$routes->get('/client', 'Client::index');
$routes->get('/client/(:num)', 'Client::details/$1');
$routes->get('/product', 'Product::index');
$routes->get('/product/(:num)', 'Product::details/$1');

// ROUTER ADMIN
$routes->get('/admin', 'Admin\Admin::index');
$routes->group('admin', function ($admin) {
  $admin->get('logout', 'Admin\Users::logout');
  $admin->post('login', 'Admin\Users::login');
  // CLIENT
  $admin->get('/client', 'Admin\Client::index');
  $admin->group('client', function ($client) {
    $client->get('register', 'Admin\Client::store');
    $client->post('register', 'Admin\Client::storeAction');
    $client->get('update/(:num)', 'Admin\Client::update/$1');
    $client->post('update/(:num)', 'Admin\Client::updateAction/$1');
    $client->get('delete/(:num)', 'Admin\Client::delete/$1');
  });
  // PRODUCT
  $admin->get('/product', 'Admin\Product::index');
  $admin->group('product', function ($product) {
    $product->get('register', 'Admin\Product::store');
    $product->post('register', 'Admin\Product::storeAction');
    $product->get('update/(:num)', 'Admin\Product::update/$1');
    $product->post('update/(:num)', 'Admin\Product::updateAction/$1');
  });
});

// ROUTER API
$routes->group('api', function ($api) {
  $api->get('client', 'Api\Client::index');
});

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
