<?php
  $routes->group('subjects', ['namespace' => 'Modules\SubjectsManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Subjects::index');
    $routes->match(['get', 'post'], 'add', 'Subjects::add_subject');
    $routes->get('(:num)', 'Subjects::index/$1');
    $routes->get('show/(:num)', 'Subjects::show_subject/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Subjects::edit_subject/$1');
    $routes->delete('delete/(:num)', 'Subjects::delete_subject/$1');
});
