<?php
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
