<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['order'] 								= 'order';
$route['add'] 									= 'order/add';
$route['add_item'] 							= 'order/add_item';
$route['edit_item'] 						= 'order/edit_item';
$route['edit/(:any)'] 					= 'order/edit/$1';
$route['add_bunga'] 						= 'bunga/add';
$route['save_add'] 							= 'bunga/save_add';
$route['edit_bunga/(:any)'] 		= 'bunga/edit/$1';
$route['save_edit'] 						= 'bunga/save_edit';
$route['edit/(:any)'] 					= 'order/edit/$1';
$route['delete/(:any)'] 				= 'order/delete/$1';
$route['cancel'] 								= 'order/cancel';
$route['cetak'] 								= 'cetak';
$route['default_controller'] 		= 'bunga';
$route['404_override'] 					= '';
$route['translate_uri_dashes']	= FALSE;
