<?php
$routes->group('colleges', ['namespace' => 'Modules\CollegesManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Colleges::index');
    $routes->get('(:num)', 'Colleges::index/$1');
    $routes->get('show/(:num)', 'Colleges::show_college/$1');
    $routes->match(['get', 'post'], 'add', 'Colleges::add_college');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Colleges::edit_college/$1');
    $routes->delete('delete/(:num)', 'Colleges::delete_college/$1');
});
