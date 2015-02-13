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

Route::get('/', function()
{
	/*
	$user = new User;
	$user -> FName = 'Biggie';
	$user -> LName = 'Smalls';
	$user -> UName = 'Big Poppa';
	$user -> save ();

	This bit of code above is not working correctly.

	return View::make('hello');
	*/
	$user = User::find(1);
	return $user->FName;  //This returns the First name
	$user = User::find(1);
	return $user->LName;  //This returns the last name
	$user = User::find(1);
	return $user->UName; //This returns the username
	/*This is curious. When I tried to input user data directly, this did not work. But I am able to pull the Data from the Database.
	So this is working but not the way I would like it to be. */

});
