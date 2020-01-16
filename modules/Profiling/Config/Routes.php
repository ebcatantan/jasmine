<?php
$routes->group('employees', ['namespace' => 'Modules\Profiling\Controllers'], function($routes)
{
    $routes->get('/', 'Employees::index');
    $routes->match(['get', 'post'], 'add', 'Employees::add_employee');
    $routes->get('(:num)', 'Employees::index/$1');
    $routes->get('show/(:num)', 'Employees::show_employee/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Employees::edit_employee/$1');
    $routes->delete('delete/(:num)', 'Employees::delete_employee/$1');
});
