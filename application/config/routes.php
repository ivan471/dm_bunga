<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['order'] 								= 'order';
$route['add'] 									= 'order/add';
$route['add_item'] 									= 'order/add_item';
$route['edit/(:any)'] 								= 'order/edit/$1';
$route['delete/(:any)'] 								= 'order/delete/$1';
$route['cancel'] 								= 'order/cancel';
$route['cetak'] 								= 'order/cetak';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
