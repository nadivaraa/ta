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

// USER
// REGISTER
$route['register'] = 'authcontroller/register';
$route['proses_register'] = 'authcontroller/proses_register';

//LOGIN
$route['proses_login'] = 'Authcontroller/proses_login';

// BERANDA
$route['beranda'] = 'berandacontroller/beranda';

// BERKAS
$route['keldok'] = 'berkascontroller/keldok';
$route['proses_keldok'] = 'berkascontroller/proses_keldok';

$route['kemba'] = 'berkascontroller/kemba';


$route['slik'] = 'berkascontroller/slik';

$route['jaminan'] = 'berkascontroller/jaminan';
$route['proses_jaminan'] = 'berkascontroller/proses_jaminan';

// REKOMENDASI
$route['rekomendasi'] = 'rekomendasicontroller/rekomendasi';


//ADMIN
// ALOGIN
$route['admin/login'] = 'aauthcontroller/alogin';
$route['admin/aproseslogin'] = 'aauthcontroller/aproseslogin';

// ABERANDA
$route['admin/beranda'] = 'aberandacontroller/aberanda';

//ANASABAH
$route['admin/nasabah'] = 'anasabahcontroller/anasabah';

//AVERIFIKASI BERKAS
$route['admin/keldok'] = 'averberkascontroller/akeldok';
$route['admin/kemba'] = 'averberkascontroller/akemba';
$route['admin/slik'] = 'averberkascontroller/aslik';
$route['admin/jaminan'] = 'averberkascontroller/ajaminan';

//AKRITERIA
$route['admin/krikeldok'] = 'akriteriacontroller/akrikeldok';
$route['admin/krikemba'] = 'akriteriacontroller/akrikemba';
$route['admin/krislik'] = 'akriteriacontroller/akrislik';
$route['admin/krijaminan'] = 'akriteriacontroller/akrijaminan';

//APENILAIAN
$route['admin/apenilaian'] = 'apenilaiancontroller/apenilaian';

//AREKOMENDASI
$route['admin/arekomendasi'] = 'arekomendasicontroller/arekomendasi';

