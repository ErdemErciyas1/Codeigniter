<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';


// dit zorgt ervoor dat de "Home" naar "About" veranderd
	
