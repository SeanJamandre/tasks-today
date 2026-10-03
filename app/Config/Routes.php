<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::welcome');
$routes->get('about', 'Pages::about');
$routes->get('profile', 'Pages::profile');
$routes->get('tasks', 'Tasks::index');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attempt');
$routes->get('logout', 'Auth::logout');
$routes->get('tasks/new', 'Tasks::newTask');
$routes->post('tasks', 'Tasks::create');
$routes->get('tasks/(:num)/edit', 'Tasks::edit/$1');
$routes->post('tasks/(:num)/update', 'Tasks::update/$1');
$routes->post('tasks/(:num)/delete', 'Tasks::delete/$1');
