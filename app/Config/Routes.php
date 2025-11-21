<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

// Rute Default (Halaman Utama)
$routes->get('/', 'Home::index');

// --- PENDUDUK ROUTES ---
$routes->group('penduduk', static function ($routes) {
    // View (GET /penduduk)
    $routes->get('/', 'Penduduk::index');

    // Create Data
    $routes->get('tambah', 'Penduduk::new');
    $routes->post('save', 'Penduduk::create');

    // Edit/Update Data
    $routes->get('ubah/(:any)', 'Penduduk::edit/$1');
    $routes->put('(:any)', 'Penduduk::update/$1');

    // Delete Data
    $routes->delete('(:segment)', 'Penduduk::delete/$1');
});

// --- KARTU KELUARGA ROUTES (KK) ---
$routes->group('kartu-keluarga', static function ($routes) {
    // View (GET /kartu-keluarga)
    $routes->get('/', 'KartuKeluarga::index');

    // Create Data
    $routes->get('tambah', 'KartuKeluarga::new');
    $routes->post('save', 'KartuKeluarga::create');

    // Edit/Update Data
    $routes->get('ubah/(:any)', 'KartuKeluarga::edit/$1');
    $routes->put('(:any)', 'KartuKeluarga::update/$1');

    // Delete Data
    $routes->delete('(:segment)', 'KartuKeluarga::delete/$1');
});

// --- AUTH ROUTES ---
$routes->group('auth', static function ($routes) {
    // View (GET /kartu-keluarga)
    $routes->get('login', 'Auth::login');

    $routes->post('/', 'Auth::loginProcess');
    $routes->get('logout', 'Auth::Logout');

    // // Create Data
    // $routes->get('tambah', 'Auth::new', ['as' => 'kk.new']);
    // $routes->post('save', 'Auth::create', ['as' => 'kk.create']);

    // // Edit/Update Data
    // $routes->get('ubah/(:any)', 'Auth::edit/$1', ['as' => 'kk.edit']);
    // $routes->put('(:any)', 'Auth::update/$1', ['as' => 'kk.update']);

    // // Delete Data
    // $routes->delete('(:segment)', 'Auth::delete/$1', ['as' => 'kk.delete']);
});