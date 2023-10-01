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

$routes->match(['get', 'post'], '/register', 'Home::register');
$routes->match(['get', 'post'], '/signin', 'Home::signin');
['filter' => 'authGuard'];
