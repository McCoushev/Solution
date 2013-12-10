<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
  | There area two reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router what URI segments to use if those provided
  | in the URL cannot be matched to a valid route.
  |
 */

$route['default_controller'] = "pages/views";
$route['404_override']       = '';
$route['contact']            = 'contact';
$route['purpose']            = 'pages/views/purpose';
$route['questions']          = 'pages/views/questions';
$route['about-company']      = 'pages/views/about-company';
$route['about-company/ustav']= 'pages/views/ustav';
$route['about-company/dogovor'] = 'pages/views/dogovor';
$route['about-company/invoice'] = 'pages/views/invoice';
$route['about-company/invoice-print'] = 'pages/views/invoiceBlank';
$route['partners']           = 'pages/views/partners';
$route['controls']            = 'pages/views/control';
$route['shareholderProtect'] = 'pages/views/shareholderProtect';
$route['video']              = 'pages/views/video';
$route['news']               = 'pages/views/news';
$route['scheme-entry']       = 'pages/views/scheme-entry';


//$route['(:any)'] = 'pages/views/$1';

$route['forgot_password']    = 'auth/forgot_password';
$route['login']     = 'auth/login';
$route['logout']     = 'auth/logout';
$route['register']  = 'auth/userRegistration';
$route['register_sucsess']  = 'auth/user_register_sucsess';
$route['cabinet/edit']    = 'cabinet/editForm';
$route['cabinet/update']    = 'cabinet/update';
$route['cabinet/success']    = 'cabinet/success';
$route['cabinet/invoice']    = 'cabinet/invoice';
$route['cabinet/bonus']    = 'cabinet/showBonus';
$route['cabinet/genialogy'] = 'cabinet/genialogy';
$route['cabinet'] = 'cabinet'; 
//$route['cabinet']           = 'underConstruct/underConstruct';
//$route['cabinet/(:any)']    = 'auth/$1';

// --------------Block for control panel ----------------

// --------------Block for control panel ----------------

$route['control/user_list'] = 'control/control/user_list';
$route['control/payments'] = 'control/control/user_payments';
//$route['control/multigrids'] = 'control/control/multigrids';

//$route['control/payments/read/(:num)'] = 'control/control/user_payments';
//$route['control/example'] = 'control/control/offices';
//$route['control/customers_management'] = 'control/control/customers_management';
//$route['control/film_management_twitter_bootstrap'] = 'control/control/film_management_twitter_bootstrap';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
