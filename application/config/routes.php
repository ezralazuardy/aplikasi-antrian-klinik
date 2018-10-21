<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Landingpage/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*Admin Stuff*/
$route['DashboardAdmin'] = 'Admin/C_Dashboard';
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

/*Client Stuff*/
$route['Dashboard'] = 'Client/C_Dashboard';
$route['Client/(:any)'] = 'Client/$1';
$route['Client/(:any)/(:any)'] = 'Client/$1/$2';

$route['AmbilAntrian'] = 'Client/C_AmbilAntrian';

$route['LihatJadwal'] = 'Client/C_LihatJadwal';


/* Main Menu Stuff */
$route['Daftar'] = 'C_Daftar/index';
$route['Daftar/(:any)'] = 'C_Daftar/$1';
$route['Daftar/(:any)/(:any)'] = 'C_Daftar/$1/$2';