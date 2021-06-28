<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(true);
$routes->setTranslateURIDashes(true);
$routes->set404Override(function(){
	return view("errors/404");
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('Login', 'Home::logIn');
$routes->add('layout', 'App\Views\layout');
//Product
$routes->add('viewToCreateProduct', 'ProductController::viewForCreating');
$routes->add('viewToUpdateProduct/(:num)', 'ProductController::viewForUptading/$1');
$routes->add('viewToRequestProduct', 'ProductController::viewForRequesting');
$routes->add('DeletingProduct/(:num)', 'ProductController::deleting/$1');
$routes->post('CreatingProduct', 'ProductController::creating');
$routes->post('UpdatingProduct/(:num)', 'ProductController::updating/$1');
//END PRODUCT
//USER
$routes->add('viewToCreateUser', 'UserController::viewForCreating');
$routes->add('viewToUpdateUser/(:num)', 'UserController::viewForUptading/$1');
$routes->add('viewToRequestUser', 'UserController::viewForRequesting');
$routes->add('DeletingUser/(:num)', 'UserController::deleting/$1');
$routes->post('CreatingUser', 'UserController::creating');
$routes->post('UpdatingUser/(:num)', 'UserController::updating/$1');
//END USER
//CUSTOMER
$routes->add('viewToCreateCustomer', 'CustomerController::viewForCreating');
$routes->add('viewToUpdateCustomer/(:num)', 'CustomerController::viewForUptading/$1');
$routes->add('viewToRequestCustomer', 'CustomerController::viewForRequesting');
$routes->add('DeletingCustomer/(:num)', 'CustomerController::deleting/$1');
$routes->post('CreatingCustomer', 'CustomerController::creating');
$routes->post('UpdatingCustomer/(:num)', 'CustomerController::updating/$1');
//END CUSTOMER
//VENDOR
$routes->add('viewToCreateVendor', 'VendorController::viewForCreating');
$routes->add('viewToUpdateVendor/(:num)', 'VendorController::viewForUptading/$1');
$routes->add('viewToRequestVendor', 'VendorController::viewForRequesting');
$routes->add('DeletingVendor/(:num)', 'VendorController::deleting/$1');
$routes->post('CreatingVendor', 'VendorController::creating');
$routes->post('UpdatingVendor/(:num)', 'VendorController::updating/$1');
//END VENDOR


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

