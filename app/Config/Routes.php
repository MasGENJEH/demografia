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
    $routes->get('/', 'Penduduk::index'); // View
    $routes->get('tambah', 'Penduduk::new'); // Create Data
    $routes->post('save', 'Penduduk::create');
    $routes->get('ubah/(:any)', 'Penduduk::edit/$1'); // Edit/Update Data
    $routes->put('(:any)', 'Penduduk::update/$1');
    $routes->delete('(:segment)', 'Penduduk::delete/$1'); // Delete Data
});

// --- KARTU KELUARGA ROUTES (KK) ---
$routes->group('kartu-keluarga', static function ($routes) {
    $routes->get('/', 'KartuKeluarga::index');  // View
    $routes->get('tambah', 'KartuKeluarga::new'); // View Tambah
    $routes->post('save', 'KartuKeluarga::create'); // Create Data
    $routes->get('ubah/(:any)', 'KartuKeluarga::edit/$1'); // View Edit
    $routes->put('(:any)', 'KartuKeluarga::update/$1'); // Edit/Update Data
    $routes->delete('(:segment)', 'KartuKeluarga::delete/$1'); // Delete Data
});

// --- PENGGUNA ROUTES (KK) ---
$routes->group('pengguna', ['filter' => 'isAdmin'], static function ($routes) {
    $routes->get('/', 'User::index');  // View
    $routes->get('tambah', 'User::new'); // View Tambah
    $routes->post('save', 'User::create'); // Create Data
    $routes->get('ubah/(:any)', 'User::edit/$1'); // View Edit
    $routes->put('(:any)', 'User::update/$1'); // Edit/Update Data
    $routes->delete('(:segment)', 'User::delete/$1'); // Delete Data
});

// --- AUTH ROUTES ---
$routes->group('auth', static function ($routes) {
    $routes->get('login', 'Auth::login'); // view login
    $routes->post('/', 'Auth::loginProcess'); // login process
    $routes->get('logout', 'Auth::Logout'); // logout
});