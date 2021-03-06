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
$route['user/do_login'] = 'users/processLogin';
$route['consultation/patient/assign_drugs/(:num)/(:num)'] = 'consultation/assign_drugs/$1/$2';
$route['consultation/patient/drugs/save'] = 'consultation/assign_drug_save';
$route['consultation/patient/symptoms/(:num)/(:num)'] = 'consultation/patient_symptoms/$1/$2';
$route['consultation/patient/symptoms/save'] = 'consultation/patient_symptoms_save';
$route['consultation/patient/details/save'] = 'consultation/patient_details_save';
$route['consultation/patient/details'] = 'consultation/patient_details';
$route['dashboard/user/add'] = 'dashboard/user_add';
$route['dashboard/user/list'] = 'dashboard/user_list';
$route['dashboard/user/save'] = 'users/set_user';
$route['dashboard/hospital/add'] = 'dashboard/hospital_add';
$route['dashboard/hospital/list'] = 'dashboard/hospital_list';
$route['dashboard/hospital/save'] = 'hospitals/save_hospitals';
$route['dashboard/drug/add'] = 'dashboard/drug_add';
$route['dashboard/drug/list'] = 'dashboard/drug_list';
$route['dashboard/drug/save'] = 'drugs/set_drug';
$route['dashboard/doctor/add'] = 'dashboard/doctor_add';
$route['dashboard/doctor/list'] = 'dashboard/doctor_list';
$route['dashboard/patient/list'] = 'dashboard/patient_list';
$route['dashboard/patient/save'] = 'patients/set_patient';
$route['dashboard/home'] = 'dashboard/home';
$route['dashboard/login'] = 'dashboard';
$route['dashboard/logout'] = 'users/logout';
$route['dashboard/user/signup'] = 'dashboard/signup';
$route['default_controller'] = 'dashboard';
// $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
