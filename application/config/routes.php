<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	| Frontend Routes
*/

// GET METHOD

$route['default_controller'] = 'ViewController';

$route['dashboard'] = 'ViewController/dashboard';
$route['sign-in'] = 'ViewController/signin';
$route['view_details/(:any)'] = 'ViewController/view_details/$1';
$route['edit_details/(:any)'] = 'ViewController/edit_details/$1';
$route['delete_data'] = 'ViewController/delete_data';
$route['add_info'] = 'ViewController/add_info';
$route['exportCSV'] = 'ViewController/exportCSV';

$route['admin/logout'] = 'ViewController/adminLogout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
