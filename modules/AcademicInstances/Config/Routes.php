<?php

$routes->group('academic-years', ['namespace' => 'Modules\AcademicInstances\Controllers'], function($routes)
{
    $routes->get('/', 'Instances::index');
    $routes->match(['get', 'post'], 'add', 'Instances::add_instance');
    $routes->get('(:num)', 'Instances::index/$1');
    //$routes->get('show/(:num)', 'Roles::show_role/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Instances::edit_instance/$1');
    $routes->delete('delete/(:num)', 'Instances::delete_instance/$1');
});
