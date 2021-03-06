<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'login';
$route['admin/login'] = 'login/login';
$route['admin/logout'] = 'login/logout';

$route['admin/sendotp'] = 'login/sendotp';
$route['admin/checkotp'] = 'login/checkotp';
$route['admin/change_pass'] = 'login/change_pass';

$route['admin/dashboard'] = 'admin/dashboard';

$route['admin/admins'] = 'admin/admins';
$route['admin/admin-search-data'] = 'admin/admins/ajaxPaginationSearch';
$route['admin/admin-search-data/(:num)'] = 'admin/admins/ajaxPaginationSearch/$1';
$route['admin/add-admin'] = 'admin/admins/manageAdmin';
$route['admin/edit-admin/(:num)'] = 'admin/admins/manageAdmin/$1';
$route['admin/admin-save-data'] = 'admin/admins/saveData';
$route['admin/change-status-admin'] = 'admin/admins/statusChange';
$route['admin/delete-admin'] = 'admin/admins/deleteData';

$route['admin/users'] = 'admin/users';
$route['admin/user-search-data'] = 'admin/users/ajaxPaginationSearch';
$route['admin/user-search-data/(:num)'] = 'admin/users/ajaxPaginationSearch/$1';
$route['admin/user-details/(:num)'] = 'admin/users/detailsUser/$1';
$route['admin/delete-user'] = 'admin/users/deleteData';
$route['users/export-data'] = 'admin/users/exportData';


$route['admin/categories'] = 'admin/categories';
$route['admin/category-search-data'] = 'admin/categories/ajaxPaginationSearch';
$route['admin/category-search-data/(:num)'] = 'admin/categories/ajaxPaginationSearch/$1';
$route['admin/add-category'] = 'admin/categories/manageCategory';
$route['admin/edit-category/(:any)'] = 'admin/categories/manageCategory/$1';
$route['admin/category-save-data'] = 'admin/categories/saveData';
$route['admin/delete-category'] = 'admin/categories/deleteData';

$route['admin/prices'] = 'admin/prices';
$route['admin/price-search-data'] = 'admin/prices/ajaxPaginationSearch';
$route['admin/price-search-data/(:num)'] = 'admin/prices/ajaxPaginationSearch/$1';
$route['admin/add-price'] = 'admin/prices/managePrice';
$route['admin/edit-price/(:any)'] = 'admin/prices/managePrice/$1';
$route['admin/price-save-data'] = 'admin/prices/saveData';
$route['admin/delete-price'] = 'admin/prices/deleteData';

$route['admin/emails'] = 'admin/emails';
$route['admin/edit-search-data'] = 'admin/emails/ajaxPaginationSearch';
$route['admin/edit-search-data/(:num)'] = 'admin/emails/ajaxPaginationSearch/$1';
$route['admin/edit-email/(:num)'] = 'admin/emails/manageEmail/$1';
$route['admin/email-save-data'] = 'admin/emails/saveData';

$route['admin/site-settings'] = 'admin/sitesettings/manageSettings';
$route['admin/site-settings-save-data'] = 'admin/sitesettings/saveData';

$route['admin/pages'] = 'admin/pages';
$route['admin/page-search-data'] = 'admin/pages/ajaxPaginationSearch';
$route['admin/page-search-data/(:num)'] = 'admin/pages/ajaxPaginationSearch/$1';
$route['admin/add-page'] = 'admin/pages/managePage';
$route['admin/edit-page/(:any)'] = 'admin/pages/managePage/$1';
$route['admin/page-save-data'] = 'admin/pages/saveData';
$route['admin/page-alias'] = 'admin/pages/AliasManage';
$route['admin/delete-page'] = 'admin/pages/deleteData';




//************************* Front

$route['default_controller'] = 'welcome/index';
$route['user/resetpassword/([a-z]+)/(:any)'] = 'site/resetpassword/$1/$2';
$route['admin/resetpassword/(:any)'] = 'site/admin_resetpassword/$1';
$route['admin/unauthorized'] = 'admin/admin/unauthorized';
$route['parent/unauthorized'] = 'parent/parents/unauthorized';
$route['student/unauthorized'] = 'user/user/unauthorized';
$route['teacher/unauthorized'] = 'teacher/teacher/unauthorized';
$route['accountant/unauthorized'] = 'accountant/accountant/unauthorized';
$route['librarian/unauthorized'] = 'librarian/librarian/unauthorized';
//$route['404_override'] = '';
$route['404_override'] = 'school/show_404';
$route['translate_uri_dashes'] = FALSE;

//======= front url rewriting==========
$route['page/contact-us'] = 'welcome/contactus_page';
$route['page/recruitment'] = 'welcome/recruitment_page';
$route['page/minister'] = 'welcome/minister_page';
$route['page/prsecy'] = 'welcome/prsecy_page';
$route['page/keyofficials'] = 'welcome/keyofficials_page';
$route['page/rti'] = 'welcome/rti_page';

$route['contact-save-data'] = 'front/cms/contactSaveData';
$route['about-us'] = 'front/cms/getAboutUs';
$route['tearms-condition'] = 'front/cms/getTermsOfService';
$route['privacy-policy'] = 'front/cms/getPrivacyPolicy';
$route['about-us'] = 'front/cms/getAboutUs';
$route['mission'] = 'front/cms/getMission';
$route['vision'] = 'front/cms/getVission';
$route['values'] = 'front/cms/getValues';
$route['who-we-are'] = 'front/cms/getWhoWeAre';
$route['who-we-us'] = 'front/cms/getWhoWeUs';
$route['certificatian'] = 'front/cms/getCertificatian';

$route['our-services'] = 'front/cms/getOurServices';
$route['our-advantages'] = 'front/cms/getAdvantages';
$route['solar-technology_solutions'] = 'front/cms/getSolarTechnologySolutions';
$route['rooftop-solar'] = 'front/cms/getRooftopSolar';
$route['ground-mounted-solar'] = 'front/cms/getGroundMountedSolar';
$route['solar-parks'] = 'front/cms/getSolarParks';
$route['floating-solar-system'] = 'front/cms/getFloatingSolarSystem';
$route['business-model'] = 'front/cms/getBusinessModel';
$route['capex'] = 'front/cms/getCapex';
$route['resco-opex-boat-considers-ppa'] = 'front/cms/getRescoOpexBoatConsidersPpa';

$route['solar-products'] = 'front/cms/getSolarProducts';
$route['modules'] = 'front/cms/getModules';
$route['monocrystaline'] = 'front/cms/getMonocrystaline';
$route['polycrystaline'] = 'front/cms/getPolycrystaline';
$route['mono-perc'] = 'front/cms/getMonoPerc';
$route['remote-monitoring'] = 'front/cms/getRemoteMonitoring';
$route['solar-pumps'] = 'front/cms/getSolarPumps';
$route['solar-heater'] = 'front/cms/getSolarHeater';
$route['solar-street-light'] = 'front/cms/getSolarStreetLight';

$route['recruitment'] = 'front/cms/getRecruitment';
$route['contact-us'] = 'front/cms/getContactUs';

$route['feedback'] = 'front/cms/getFeedback';

// ned dev code 

$route['solar-panel'] = 'front/cms/getSolarpanel';
$route['ongrid-system'] = 'front/cms/getOngrid';
$route['offgrid-system'] = 'front/cms/getOffgrid';
$route['hybrid-system'] = 'front/cms/getHybrid';
$route['interest_request'] = 'front/cms/getInterestrequest';
$route['get-distributor'] = 'front/cms/getDistributor';
$route['send-form-request'] = 'front/cms/postRequest';
//$route['check-portal-link'] = 'front/cms/getportal_link';

$route['razorpay'] = 'front/razorpay';
$route['payumoney-confirmation'] = 'front/payumoney/check';
$route['payment-status'] = 'front/payumoney/paymentStatus';

$route['ccavenue'] = 'front/ccavenue/index';
$route['ccavenue-request-handler'] = 'front/ccavenue/ccavRequestHandler';
$route['ccavenue-responce-handler'] = 'front/ccavenue/ccavResponceHandler';
// new dev code 

$route['switch-lang/(:any)'] = 'languageSwitcher/switchLang/$1';
 
$route['page/(:any)'] = 'welcome/page/$1';
$route['read/(:any)'] = 'welcome/read/$1';
$route['frontend'] = 'welcome';
$route['Career'] = 'front/cms/getcareer';





