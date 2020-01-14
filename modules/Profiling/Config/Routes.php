<?php

$routes->group('students', ['namespace' => 'Modules\Profiling\Controllers'], function($routes)
{
    $routes->get('/', 'Students::index');
    $routes->match(['get', 'post'], 'add', 'Students::add_student');
    $routes->get('(:num)', 'Students::index/$1');
    $routes->get('show/(:num)', 'Students::show_student/$1');//ito yung sa show
    $routes->match(['get', 'post'], 'edit/(:num)', 'Students::edit_student/$1');
    $routes->delete('delete/(:num)', 'Students::delete_student/$1');
});
