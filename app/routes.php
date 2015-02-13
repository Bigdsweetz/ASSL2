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

/* Route::get('/', function()
{
	/*
	$user = new User;
	$user -> FName = 'Biggie';
	$user -> LName = 'Smalls';
	$user -> UName = 'Big Poppa';
	$user -> save ();

	This bit of code above is not working correctly.


	//return View::make('hello');
	return View::make('hello', array('theLocation'=> 'NYC'));

	$user = User::find(1);
	return $user->FName;  //This returns the First name
	$user = User::find(1);
	return $user->LName;  //This returns the last name
	$user = User::find(1);
	return $user->UName; //This returns the username
	/*This is curious. When I tried to input user data directly, this did not work. But I am able to pull the Data from the Database.
	So this is working but not the way I would like it to be.

});


//This is where the signup page is going to be created
Route::get('signup', function ()
{
	return View::make('signup');

});

Route::post('thanks', function()
{
	$theEmail = Input::get('email');
	$theUsername = Input::get('UName');
	return View::make('thanks') ->with('theUsername', $theUsername); //('theEmail', $theEmail);
});


*/
Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/register', function()
{
	return View::make('register');
});

Route::post('/register', function()
{
	$user = new User;
	$user->firstname = Input::get('firstname');
	$user->lastname = Input::get('lastname');
	$user->username = Input::get('username');
	$user->email = Input::get('email');
	$user->password = Hash::make(Input::get('password'));
	$user->save();
	$theUsername = Input::get('username');
	return View::make('thanks') ->with('theUsername' ,$theUsername);

});
