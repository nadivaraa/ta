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
$route['proses_logout'] = 'Authcontroller/proses_logout';

//PROFILE
$route['profile'] = 'profilecontroller/profile';

// BERANDA
$route['beranda'] = 'berandacontroller/beranda';

// BERKAS
$route['keldok'] = 'berkascontroller/keldok';
$route['proses_keldok'] = 'berkascontroller/proses_keldok';
$route['kirim_keldok'] = 'berkascontroller/kirim_keldok';

$route['kemba'] = 'berkascontroller/kemba';
$route['proses_kemba'] = 'berkascontroller/proses_kemba';


$route['slik'] = 'berkascontroller/slik';

$route['jaminan'] = 'berkascontroller/jaminan';
$route['proses_jaminan'] = 'berkascontroller/proses_jaminan';
$route['kirim_jaminan'] = 'berkascontroller/kirim_jaminan';

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
$route['admin/averifkeldok/(:any)'] = 'averberkascontroller/averifkeldok/$1';
$route['admin/proses_verifkeldok']  = 'averberkascontroller/proses_verifkeldok';

$route['admin/kemba'] = 'averberkascontroller/akemba';
$route['admin/averifkemba/(:any)'] = 'averberkascontroller/averifkemba/$1';
$route['admin/proses_verifkemba']  = 'averberkascontroller/proses_verifkemba';

$route['admin/slik'] = 'averberkascontroller/aslik';
$route['admin/averifslik/(:any)'] = 'averberkascontroller/averifslik/$1';
$route['admin/proses_verifslik']  = 'averberkascontroller/proses_verifslik';

$route['admin/jaminan'] = 'averberkascontroller/ajaminan';
$route['admin/averifjaminan/(:any)'] = 'averberkascontroller/averifjaminan/$1';
$route['admin/proses_verifjaminan']  = 'averberkascontroller/proses_verifjaminan';
$route['admin/proses_penjaminan'] = 'averberkascontroller/proses_penjaminan';



//AKRITERIA
$route['admin/krikeldok'] = 'akriteriacontroller/akrikeldok';
$route['admin/atambahkrikeldok'] = 'akriteriacontroller/atambahkrikeldok';
$route['admin/aprostambahkrikeldok'] = 'akriteriacontroller/aprostambahkrikeldok';
$route['admin/aeditkrikeldok/(:any)'] = 'akriteriacontroller/aeditkrikeldok/$1';
$route['admin/aprosupdatekrikeldok'] = 'akriteriacontroller/aprosupdatekrikeldok';
$route['admin/aproshapuskrikeldok'] = 'akriteriacontroller/aproshapuskrikeldok';

$route['admin/krikemba'] = 'akriteriacontroller/akrikemba';
$route['admin/atambahkrikemba'] = 'akriteriacontroller/atambahkrikemba';
$route['admin/aprostambahkrikemba'] = 'akriteriacontroller/aprostambahkrikemba';
$route['admin/aeditkrikemba/(:any)'] = 'akriteriacontroller/aeditkrikemba/$1';
$route['admin/aprosupdatekrikemba'] = 'akriteriacontroller/aprosupdatekrikemba';
$route['admin/aproshapuskrikemba'] = 'akriteriacontroller/aproshapuskrikemba';

$route['admin/krislik'] = 'akriteriacontroller/akrislik';
$route['admin/atambahkrislik'] = 'akriteriacontroller/atambahkrislik';
$route['admin/aprostambahkrislik'] = 'akriteriacontroller/aprostambahkrislik';
$route['admin/aeditkrislik/(:any)'] = 'akriteriacontroller/aeditkrislik/$1';
$route['admin/aprosupdatekrislik'] = 'akriteriacontroller/aprosupdatekrislik';
$route['admin/aproshapuskrislik'] = 'akriteriacontroller/aproshapuskrislik';

$route['admin/krijaminan'] = 'akriteriacontroller/akrijaminan';
$route['admin/atambahkrijaminan'] = 'akriteriacontroller/atambahkrijaminan';
$route['admin/aprostambahkrijaminan'] = 'akriteriacontroller/aprostambahkrijaminan';
$route['admin/aeditkrijaminan/(:any)'] = 'akriteriacontroller/aeditkrijaminan/$1';
$route['admin/aprosupdatekrijaminan'] = 'akriteriacontroller/aprosupdatekrijaminan';
$route['admin/aproshapuskrijaminan'] = 'akriteriacontroller/aproshapuskrijaminan';


//APENILAIAN
$route['admin/apenilaian'] = 'apenilaiancontroller/apenilaian';
$route['admin/apenilaian/setready'] = 'apenilaiancontroller/setready';

//AREKOMENDASI
$route['admin/arekomendasi'] = 'arekomendasicontroller/arekomendasi';

