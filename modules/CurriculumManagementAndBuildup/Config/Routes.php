<?php

$routes->group('curriculums', ['namespace' => 'Modules\CurriculumManagementAndBuildup\Controllers'], function($routes)
{
    $routes->get('/', 'Curriculum::index');
    $routes->match(['get', 'post'], 'add', 'Curriculum::add_curriculum');
    $routes->get('(:num)', 'Curriculum::index/$1');
    $routes->get('show/(:num)', 'Curriculum::show_curriculum/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Curriculum::edit_curriculum/$1');
    $routes->delete('delete/(:num)', 'Curriculum::delete_curriculum/$1');
});
