<?php namespace App\Http\Controllers;

use Auth;

class UserController extends Controller {


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function showProfile()
	{
		$u = Auth::user();
		return view('userProfile', ['user'=>$u]);
	}



}
