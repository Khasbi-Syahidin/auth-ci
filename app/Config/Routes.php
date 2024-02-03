<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
 

$routes->get('/', 'Home::index', ['filter' => 'login']);
$routes->get('/home', 'Home::index', ['filter' => 'login']);
