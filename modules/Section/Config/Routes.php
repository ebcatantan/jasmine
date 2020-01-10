<?php
$routes->group('sections', ['namespace' => 'Modules\Section\Controllers'], function($routes)
{
    $routes->get('/', 'Section::index');
    $routes->match(['get', 'post'], 'add', 'Section::add_section');
    $routes->get('(:num)', 'Section::index/$1');
    //$routes->get('show/(:num)', 'Section::show_section/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Section::edit_section/$1');
    $routes->delete('delete/(:num)', 'Section::delete_section/$1');
});
