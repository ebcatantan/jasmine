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
$routes->group('curriculum_subject_equivallence', ['namespace' => 'Modules\CurriculumManagementAndBuildup\Controllers'], function($routes)
{
    $routes->get('/', 'curriculum_Subject_quivallence::index');
    $routes->match(['get', 'post'], 'add', 'CurriculumSubject_Equivallence::add_curriculum_subject_equivallence');
    $routes->get('(:num)', 'CurriculumSubject_Equivallence::index/$1');
    $routes->get('show/(:num)', 'CurriculumSubject_Equivallence::show_curriculum_subject_equivallence/$1');
    $routes->match(['get', 'post'], 'edit/(:num)', 'CurriculumSubject_Equivallence::edit_curriculum_subject_equivallence/$1');
    $routes->delete('delete/(:num)', 'CurriculumSubject_Equivallence::delete_curriculum_subject_equivallence/$1');
});
