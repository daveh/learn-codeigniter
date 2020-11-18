<?php namespace Config;

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
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('([a-z]{2})', 'Home::index/$1');

$routes->group('{locale}', ['filter' => 'guest'], function($routes) {

	$routes->get('signup', 'Signup::new');
	$routes->post('signup/create', 'Signup::create');
	$routes->get('signup/success', 'Signup::success');
	$routes->get('signup/activate/(:alphanum)', 'Signup::activate/$1');

    $routes->get('login', 'Login::new');
    $routes->post('login/create', 'Login::create');
    $routes->get('password/forgot', 'Password::forgot');
    $routes->post('password/processforgot', 'Password::processForgot');
    $routes->get('password/resetsent', 'Password::resetSent');
    $routes->get('password/reset/(:alphanum)', 'Password::reset/$1');
    $routes->post('password/processreset/(:alphanum)', 'Password::processReset/$1');
    $routes->get('password/resetsuccess', 'Password::resetSuccess');
});

$routes->get('/logout', 'Login::delete');

/**
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
