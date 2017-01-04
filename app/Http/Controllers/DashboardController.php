<?php namespace App\Http\Controllers;

class DashboardController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dg = new \C_DataGrid("SELECT * FROM orders", "orderNumber", "orders");
		$dg->enable_edit("FORM", "CRUD");
		$dg->enable_autowidth(true)->enable_autoheight(true);
		$dg->set_theme('cobalt-flat');
		$dg->set_grid_property(array('cmTemplate'=>array('title'=>false)));
		$dg->display(false);

		$grid = $dg -> get_display(true);  // do not include required javascript libraries until later with with display_script_includeonce method.

	    return view('dashboard', ['grid' => $grid]);
	}

}
