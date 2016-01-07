<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//$route['default_controller'] = 'under-contruction';
$route['default_controller'] = 'home/index';
//$route['default_controller'] = 'deal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// front
// $route['/'] = 'Home';

// customer payment
//s-admin
$route['s-admin'] = 's-admin/index/index';
$route['s-admin/(:any)'] = 's-admin/$1';
//$route['s-admin/(:any)/(:any)'] = 's-admin/$2/$3';

//e-admin
$route['(:any)'] = 'e-admin/index/index';
$route['(:num)/(:any)'] = 'e-admin/$2/index';
$route['(:num)/(:any)/(:any)'] = 'e-admin/$2/$3';
/*
// hosting
$route['sign-up'] = 'sign-up/index';
$route['sign-up/(:any)'] = 'sign-up/$1';

// hosting
$route['hosting'] = 'hosting/index';
$route['hosting/(:any)'] = 'hosting/$1';

// deal
$route['deal'] = 'deal/index';
$route['deal/(:any)'] = 'deal/$1';

// contact-us
$route['contact-us'] = 'contact-us/index';
$route['contact-us/(:any)'] = 'contact-us/$1';

// support
$route['support'] = 'support/index';
$route['support/(:any)'] = 'support/$1';

// submission - all forms submission goes here
$route['submission'] = 'submission/index';
$route['submission/(:any)'] = 'submission/$1';
*/