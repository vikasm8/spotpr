<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	| Frontend Routes
*/

// GET METHOD

$route['default_controller'] = 'ViewController';
$route['dashboard'] = 'ViewController/dashboard';
$route['srtracker'] = 'ViewController/srtracker';
$route['users'] = 'ViewController/users';
$route['sign-in'] = 'ViewController/signin';
$route['view_details/(:any)'] = 'ViewController/view_details/$1';
$route['view_tracker/(:any)'] = 'ViewController/view_tracker/$1';
$route['edit_details/(:any)'] = 'ViewController/edit_details/$1';
$route['edit_tracker/(:any)'] = 'ViewController/edit_tracker/$1';
$route['edit_user/(:any)'] = 'ViewController/edit_user/$1';
$route['delete_data'] = 'ViewController/delete_data';
$route['add_info'] = 'ViewController/add_info';
$route['add_tracker'] = 'ViewController/add_tracker';
$route['add_user'] = 'ViewController/add_user';
$route['exportCSV'] = 'ViewController/exportCSV';

$route['logout'] = 'ViewController/Logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
