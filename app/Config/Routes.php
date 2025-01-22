<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::studentForm');

$routes->post('/submit-form', 'Home::submitForm');

$routes->get('/studentList', 'Home::studentList');

$routes->get('deleteStudent/(:num)', 'Home::deleteStudent/$1');
