<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::studentForm');

$routes->get('/studentList', 'studentList::studentList');
