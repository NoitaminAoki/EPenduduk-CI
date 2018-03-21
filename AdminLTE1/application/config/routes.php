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
|	https://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ======================== Login Admin ======================== //

$route['master/login'] = 'LoginController/login';

$route['master/logout'] = 'LoginController/logout';


// ======================== END Login Admin ======================== //


// ======================== Controller User ======================== //

$route['homepage'] = 'UserController';

$route['homepage/login'] = 'UserController/loginUser';
$route['homepage/logout'] = 'UserController/logoutUser';

$route['homepage/register'] = 'UserController/registerUser';

$route['homepage/me'] = 'UserController/homepageUser';
$route['homepage/me/(:num)'] = 'UserController/homepageUser/$1';

$route['homepage/surat_ajuan'] = 'UserController/generatePdf';

// ======================== END Controller User ======================== //

// ======================== Master Data ======================== //

// ============= Master Kota ============= //

$route['data/kota'] = 'MasterDataKota/showAll';

$route['data/kota/edit/(:num)'] = 'MasterDataKota/editKota/$1';

$route['data/kota/tambah'] = 'MasterDataKota/tambahKota';

$route['data/kota/update'] = 'MasterDataKota/updateKota';

$route['data/kota/delete/(:num)'] = 'MasterDataKota/deleteKota/$1';


// ============= Master Surat Keterangan Domisili ============= //

$route['data/surat'] = 'MasterDataInvoice/showAll';

$route['data/surat/tambah'] = 'MasterDataInvoice/tambahData';

$route['data/surat/delete/(:num)'] = 'MasterDataInvoice/deleteData/$1';

$route['data/surat/edit/(:num)'] = 'MasterDataInvoice/editData/$1';
$route['data/surat/update'] = 'MasterDataInvoice/updateData';


// ======================== END Master Data ======================== //