<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'Home::CaibalLester');
$routes->get('/product/(:any)', 'Home::product/$1');
$routes->post('/save', 'Home::save');
$routes->get('/delete/(:any)', 'Home::delete/$1');
$routes->get('/edit/(:any)', 'Home::edit/$1');
$routes->GET('/register', 'Home::regis');
$routes->POST('/register', 'Home::register');
