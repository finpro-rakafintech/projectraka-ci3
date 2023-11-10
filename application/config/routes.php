<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'PagesController';

// Route Landing Page


// Route Authentication
$route['login_page'] = 'PagesController/page_login';
$route['register_page'] = 'PagesController/page_register';
$route['sign_in'] = 'LoginController/index';
$route['sign_up'] = 'RegisterController/index';
$route['logout'] = 'LogoutController/index';


// Route Setelah Login
$route['home'] = 'HomeController/index';
$route['kalkulator'] = 'Kalkulator';
$route['product'] = 'ProductController';
$route['product_detail'] = 'ProductController/productDetail';
$route['product_detailtes/(:num)'] = 'ProductController/detailProductTes/$1';
$route['pengajuan_kpr'] = 'PengajuanKprController/index';
$route['pengajuan_kpr2'] = 'PengajuanKprController/index2';

// Route Nasabah
$route['add_nasabah'] = 'NasabahController/add';

$route['profile'] = 'ProfileController/index';
$route['statusPengajuan/(:num)'] = 'PurchaseController/statusPengajuan/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
