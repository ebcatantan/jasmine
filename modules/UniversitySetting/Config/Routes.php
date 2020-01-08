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

$routes->group('buildings', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->get('/', 'Buildings::index');
    $routes->match(['get', 'post'], 'add', 'Buildings::add_building');
    $routes->get('(:num)', 'Buildings::index/$1');
    $routes->get('show/(:num)', 'Buildings::show_building/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Buildings::edit_building/$1');
    $routes->delete('delete/(:num)', 'Buildings::delete_building/$1');
});

$routes->group('rooms', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->get('/', 'Rooms::index');
    $routes->match(['get', 'post'], 'add', 'Rooms::add_room');
    $routes->get('(:num)', 'Rooms::index/$1');
    $routes->get('show/(:num)', 'Rooms::show_room/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Rooms::edit_room/$1');
    $routes->delete('delete/(:num)', 'Rooms::delete_room/$1');
});

$routes->group('colleges', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->get('/', 'Colleges::index');
    $routes->get('(:num)', 'Colleges::index/$1');
    $routes->get('show/(:num)', 'Colleges::show_college/$1');
    $routes->match(['get', 'post'], 'add', 'Colleges::add_college');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Colleges::edit_college/$1');
    $routes->delete('delete/(:num)', 'Colleges::delete_college/$1');
});
