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
    $routes->match(['get', 'post'], 'add', 'Buildings::add_course');
    $routes->get('(:num)', 'Buildings::index/$1');
    $routes->get('show/(:num)', 'Buildings::show_course/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Buildings::edit_course/$1');
    $routes->delete('delete/(:num)', 'Buildings::delete_building/$1');
});
$routes->group('courses', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->get('/', 'Courses::index');
    $routes->match(['get', 'post'], 'add', 'Courses::add_course');
    $routes->get('(:num)', 'Courses::index/$1');
    $routes->get('show/(:num)', 'Courses::show_course/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Courses::edit_course/$1');
    $routes->delete('delete/(:num)', 'Courses::delete_course/$1');
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

$routes->group('subjects', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->get('/', 'Subjects::index');
    $routes->match(['get', 'post'], 'add', 'Subjects::add_subject');
    $routes->get('(:num)', 'Subjects::index/$1');
    $routes->get('show/(:num)', 'Subjects::show_subject/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Subjects::edit_subject/$1');
    $routes->delete('delete/(:num)', 'Subjects::delete_subject/$1');
});
$routes->group('sections', ['namespace' => 'Modules\UniversitySetting\Controllers'], function($routes)
{
    $routes->get('/', 'Section::index');
    $routes->match(['get', 'post'], 'add', 'Section::add_section');
    $routes->get('(:num)', 'Section::index/$1');
    // $routes->get('show/(:num)', 'Section::show_section/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Section::edit_section/$1');
    $routes->delete('delete/(:num)', 'Section::delete_section/$1');
});
