<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/coba', 'Home::coba');
$routes->get('/penduduk/tabel-penduduk', 'Penduduk::index');
$routes->get('/penduduk/tambah', 'Penduduk::new');
$routes->get('/penduduk/ubah', 'Penduduk::edit');
