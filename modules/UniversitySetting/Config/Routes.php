<?php
$routes->group('semesters', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->get('/', 'Semesters::index');
    $routes->match(['get', 'post'], 'add', 'Semesters::add_semester');
    $routes->get('(:num)', 'Semesters::index/$1');
    // $routes->get('show/(:num)', 'Semesters::show_semester/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Semesters::edit_semester/$1');
    $routes->delete('delete/(:num)', 'Semesters::delete_semester/$1');
});
