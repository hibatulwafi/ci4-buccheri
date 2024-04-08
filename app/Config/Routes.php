<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'RegisterController::index');
$routes->get('register', 'RegisterController::index');
$routes->post('register', 'RegisterController::register');
$routes->get('login', 'LoginController::index');
$routes->post('login', 'LoginController::login');
$routes->get('dashboard', 'DashboardController::index');
$routes->get('logout', 'LoginController::logout');

