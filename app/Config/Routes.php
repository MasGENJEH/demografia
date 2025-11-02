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
$routes->post('/penduduk/save', 'Penduduk::create');

// edit data
$routes->get('/penduduk/ubah/(:any)', 'Penduduk::edit/$1');
$routes->put('/penduduk/(:any)', 'Penduduk::update/$1');

// delete data
$routes->delete('/penduduk/(:segment)', 'Penduduk::delete/$1');
