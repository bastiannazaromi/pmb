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
$route['pendaftaran/submit'] = 'daftar/form_daftar';