<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('admin', 'AdminController@index');

Route::get('dashboard', 'DashboardController@index');

/*
Route::get('dashboard', function () {
	
	//require_once(public_path() ."/phpGrid_Lite/conf.php");

	$dg = new C_DataGrid("SELECT * FROM orders", "orderNumber", "orders");
	$dg->enable_edit("FORM", "CRUD");
	$dg->enable_autowidth(true)->enable_autoheight(true);
	$dg->set_theme('cobalt-flat');
	$dg->set_grid_property(array('cmTemplate'=>array('title'=>false)));
	$dg->display(false);

	$grid = $dg -> get_display(true);  // do not include required javascript libraries until later with with display_script_includeonce method.
    return view('dashboard', ['grid' => $grid]);
    
   	//return view('dashboard');
});
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
