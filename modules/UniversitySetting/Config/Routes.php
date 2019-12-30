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
