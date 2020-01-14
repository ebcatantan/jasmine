<?php
$routes->group('student-examinees', ['namespace' => 'Modules\AdmissionManagement\Controllers'], function($routes)
{
    $routes->get('/', 'Admission::index');
    $routes->get('(:num)', 'Admission::index/$1');
    $routes->get('show/(:num)', 'Admission::show_admission/$1');
    $routes->get('own/(:num)', 'Admission::admission_own_profile/$1');
    //$routes->get('edit-own/(:num)', 'admissions::admission_edit_own_profile/$1');
    $routes->match(['get', 'post'], 'add', 'Admission::add_admission');
    $routes->match(['get', 'post'], 'edit/(:num)', 'Admission::edit_admissions/$1');
    $routes->delete('delete/(:num)', 'Admission::delete_admission/$1');
});
