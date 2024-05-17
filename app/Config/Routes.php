<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Router;

$routes = Services::routes();

// Rute untuk operasi CRUD Dosen
$routes->get('dosen', 'Dosen::index');
$routes->get('dosen/create', 'Dosen::create');
$routes->post('dosen/store', 'Dosen::store');
$routes->get('dosen/edit/(:num)', 'Dosen::edit/$1');
$routes->post('dosen/update/(:num)', 'Dosen::update/$1');
$routes->get('dosen/delete/(:num)', 'Dosen::delete/$1');

// Rute untuk operasi CRUD User
$routes->get('user', 'User::index');
$routes->get('user/create', 'User::create');
$routes->post('user/store', 'User::store');
$routes->get('user/edit/(:num)', 'User::edit/$1');
$routes->post('user/update/(:num)', 'User::update/$1');
$routes->get('user/delete/(:num)', 'User::delete/$1');

// Rute untuk operasi CRUD Mata Kuliah (Matkul)
$routes->get('matkul', 'Matkul::index');
$routes->get('matkul/create', 'Matkul::create');
$routes->post('matkul/store', 'Matkul::store');
$routes->get('matkul/edit/(:num)', 'Matkul::edit/$1');
$routes->post('matkul/update/(:num)', 'Matkul::update/$1');
$routes->get('matkul/delete/(:num)', 'Matkul::delete/$1');

// Rute untuk operasi CRUD Fakultas
$routes->get('fakultas', 'Fakultas::index');
$routes->get('fakultas/create', 'Fakultas::create');
$routes->post('fakultas/store', 'Fakultas::store');
$routes->get('fakultas/edit/(:num)', 'Fakultas::edit/$1');
$routes->post('fakultas/update/(:num)', 'Fakultas::update/$1');
$routes->get('fakultas/delete/(:num)', 'Fakultas::delete/$1');

// Rute untuk operasi CRUD Program Studi (Prodi)
$routes->get('prodi', 'Prodi::index');
$routes->get('prodi/create', 'Prodi::create');
$routes->post('prodi/store', 'Prodi::store');
$routes->get('prodi/edit/(:num)', 'Prodi::edit/$1');
$routes->post('prodi/update/(:num)', 'Prodi::update/$1');
$routes->get('prodi/delete/(:num)', 'Prodi::delete/$1');

// Rute untuk operasi CRUD Mahasiswa
$routes->get('mahasiswa', 'Mahasiswa::index');
$routes->get('mahasiswa/create', 'Mahasiswa::create');
$routes->post('mahasiswa/store', 'Mahasiswa::store');
$routes->get('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->get('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');


// Default route
$routes->setDefaultNamespace('App\Controllers');
$routes->get('/', 'Home::index');

// If you need to define a 404 route, you can do so here:
$routes->set404Override('App\Controllers\Errors::show404');
