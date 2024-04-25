<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Thrift::index');
$routes->get('/biodata', 'Biodata::index');
$routes->get('/contoh1', 'Contoh1::index');
$routes->get('contoh1/penjumlahan/(:num)/(:num)', 'Contoh1::penjumlahan/$1/$2');

$routes->get('/thrift', 'Thrift::index');
$routes->get('/produk', 'Produk::index');

$routes->get('/login', 'Login::index');