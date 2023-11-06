<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about_me', 'AboutMe::index');
$routes->get('/education', 'Education::index');
