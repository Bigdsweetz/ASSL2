<?php

class ProfileController extends \BaseController
{

	public function getProfile()
	{
		return View::make('profile');
	}

	protected function editProfile()
	{

		return View::make('editProfile')
		->with('about', about);
	}


}
