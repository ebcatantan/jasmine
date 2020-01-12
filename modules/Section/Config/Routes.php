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
// $routes->group('curriculum_subjects', ['namespace' => 'Modules\Section\Controllers'], function($routes)
// {
//     $routes->get('/', 'curriculum_subjects::index');
//     $routes->match(['get', 'post'], 'add', 'curriculum_subjects::add_section');
//     $routes->get('(:num)', 'curriculum_subjects::index/$1');
// });
// $routes->group('curriculums', ['namespace' => 'Modules\Section\Controllers'], function($routes)
// {
//     $routes->get('/', 'curriculums::index');
//     $routes->match(['get', 'post'], 'add', 'curriculums::add_section');
//     $routes->get('(:num)', 'curriculums::index/$1');
// });
// $routes->group('subject_offerings', ['namespace' => 'Modules\Section\Controllers'], function($routes)
// {
//     $routes->get('/', 'subject_offerings::index');
//     $routes->match(['get', 'post'], 'add', 'subject_offerings::add_section');
//     $routes->get('(:num)', 'subject_offerings::index/$1');
// });
