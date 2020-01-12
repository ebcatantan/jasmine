<?php
$routes->group('semesters', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->match(['get', 'post'],'/', 'Semesters::index');
    $routes->match(['get', 'post'], 'add', 'Semesters::add_semester');
    $routes->match(['get', 'post'],'(:num)', 'Semesters::index/$1');
    // $routes->get('show/(:num)', 'Semesters::show_semester/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Semesters::edit_semester/$1');
    $routes->delete('delete/(:num)', 'Semesters::delete_semester/$1');
});

$routes->group('buildings', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->match(['get', 'post'] , '/', 'Buildings::index');
    $routes->match(['get', 'post'], 'add', 'Buildings::add_building');
    $routes->match(['get', 'post'], '(:num)', 'Buildings::index/$1');
    $routes->get('show/(:num)', 'Buildings::show_building/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Buildings::edit_building/$1');
    $routes->delete('delete/(:num)', 'Buildings::delete_building/$1');
});

$routes->group('departments', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->match(['get', 'post'],'/', 'Departments::index');
    $routes->match(['get', 'post'], 'add', 'Departments::add_department');
    $routes->match(['get', 'post'],'(:num)', 'Departments::index/$1');
    $routes->get('show/(:num)', 'Departments::show_department/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Departments::edit_department/$1');
    $routes->delete('delete/(:num)', 'Departments::delete_department/$1');
});

$routes->group('courses', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->match(['get', 'post'],'/', 'Courses::index');
    $routes->match(['get', 'post'], 'add', 'Courses::add_course');
    $routes->match(['get', 'post'],'(:num)', 'Courses::index/$1');
    $routes->get('show/(:num)', 'Courses::show_course/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Courses::edit_course/$1');
    $routes->delete('delete/(:num)', 'Courses::delete_course/$1');
});

$routes->group('rooms', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->match(['get', 'post'],'/', 'Rooms::index');
    $routes->match(['get', 'post'], 'add', 'Rooms::add_room');
    $routes->match(['get', 'post'],'(:num)', 'Rooms::index/$1');
    $routes->get('show/(:num)', 'Rooms::show_room/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Rooms::edit_room/$1');
    $routes->delete('delete/(:num)', 'Rooms::delete_room/$1');
});

$routes->group('colleges', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->match(['get', 'post'],'/', 'Colleges::index');
    $routes->match(['get', 'post'],'(:num)', 'Colleges::index/$1');
    $routes->get('show/(:num)', 'Colleges::show_college/$1');
    $routes->match(['get', 'post'], 'add', 'Colleges::add_college');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Colleges::edit_college/$1');
    $routes->delete('delete/(:num)', 'Colleges::delete_college/$1');
});

$routes->group('subjects', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->match(['get', 'post'],'/', 'Subjects::index');
    $routes->match(['get', 'post'], 'add', 'Subjects::add_subject');
    $routes->match(['get', 'post'],'(:num)', 'Subjects::index/$1');
    $routes->get('show/(:num)', 'Subjects::show_subject/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Subjects::edit_subject/$1');
    $routes->delete('delete/(:num)', 'Subjects::delete_subject/$1');
});
