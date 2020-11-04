<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'daftar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'daftar';
$route['pendaftaran'] = 'daftar/form_daftar';
$route['about'] = 'daftar/about';
$route['contact'] = 'daftar/contact';

$route['pendaftaran/kabupaten'] = 'daftar/form_daftar';
$route['pendaftaran/get_npsn'] = 'daftar/get_npsn';
$route['pendaftaran/submit'] = 'daftar/form_daftar';

$route['login'] = 'errors';
$route['dashboard/login'] = 'login';
$route['dashboard/login/proses'] = 'login/proses';
$route['dashboard/logout'] = 'login/logout';

$route['dashboard'] = 'mahasiswa';
$route['dashboard/get_npsn'] = 'mahasiswa/get_npsn';
$route['dashboard/lengkapi_data'] = 'mahasiswa/lengkapi_data';
$route['dashboard/kabupaten'] = 'mahasiswa/kabupaten';
$route['dashboard/lengkapi_data/simpan'] = 'mahasiswa/lengkapi_data';
$route['dashboard/buktiTf'] = 'mahasiswa/index';