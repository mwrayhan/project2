<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/belajar', 'Belajar::index');
// $routes->get('/perulangan', 'Perulangan::index');
// $routes->get('/percabangan', 'Percabangan::index');