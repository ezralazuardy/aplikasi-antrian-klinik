<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Landingpage/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Admin'] = 'Admin/C_Pegawai/';
$route['Admin/(:any)'] = 'Admin/C_Pegawai/$1';
$route['Admin/(:any)/(:any)'] = 'Admin/C_Pegawai/$1/$2';

$route['Login'] = 'C_Login/index';
$route['Login/(:any)'] = 'C_Login/$1';
$route['Login/(:any)/(:any)'] = 'C_Login/$1/$2';

$route['Layanan'] = 'Admin/C_Layanan/';
$route['Layanan/(:any)'] = 'Admin/C_Layanan/$1';
$route['Layanan/(:any)/(:any)'] = 'Admin/C_Layanan/$1/$2';

$route['User'] = 'Admin/C_User/';
$route['User/(:any)'] = 'Admin/C_User/$1';
$route['User/(:any)/(:any)'] = 'Admin/C_User/$1/$2';

$route['Jadwal'] = 'Admin/C_Jadwal/';
$route['Jadwal/(:any)'] = 'Admin/C_Jadwal/$1';
$route['Jadwal/(:any)/(:any)'] = 'Admin/C_Jadwal/$1/$2';

$route['Dashboard'] = 'C_Dashboard';