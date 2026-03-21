<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::index');
$routes->get('/agency', 'Admin::agency');
$routes->get('/alert', 'Admin::alert');
$routes->get('/contact', 'Admin::contact');
$routes->get('/project', 'Admin::project');
