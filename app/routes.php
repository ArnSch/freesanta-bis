<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
require_once 'views/thingiverse.php'; 
Route::get('/', function()
{
	$thingiverse = new Thingiverse();
	if (!isset($_GET["code"]))
		return Redirect::to($thingiverse->makeLoginURL());
	else
		return View::make('hello');
});
