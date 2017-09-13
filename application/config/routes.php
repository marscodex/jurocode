<?php
defined('BASEPATH') OR exit('No direct script access allowed');




$route['default_controller'] = 'Lsm';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//routes on the home page
$route['Lsm/visionmore'] = 'Lsm/visionmore';
$route['go_to_our_goal'] = 'Lsm/goalmore';
$route['go_to_our_mission'] = 'Lsm/mission';
$route['click_here_to_contact_us'] = 'Lsm/contactus';
$route['click_here_for_archives'] = 'Lsm/details';

//other routes
$route['about_us'] = 'Lsm/about';
$route['view_candidates_profiles'] = 'Lsm/profiles';

//routes on the profiles page source
$route['some_of_our_volunteers'] = 'Lsm/volunteers';
$route['some_of_the_lsm_children'] = 'Lsm/children';


