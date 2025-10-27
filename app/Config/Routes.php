<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/coba', 'Home::coba');
$routes->get('/penduduk', 'Penduduk::index');

// create data
$routes->get('/penduduk/tambah', 'Penduduk::new');
$routes->post('/penduduk', 'Penduduk::create');

// edit data
$routes->get('/penduduk/ubah', 'Penduduk::edit');
