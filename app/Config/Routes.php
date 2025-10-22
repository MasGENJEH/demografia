<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/coba', 'Home::coba');
$routes->get('/penduduk/tabel-penduduk', 'PendudukController::index');
$routes->get('/penduduk/tambah', 'PendudukController::new');
$routes->get('/penduduk/ubah', 'PendudukController::edit');
