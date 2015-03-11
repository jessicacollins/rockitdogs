<?php namespace App\Http\Controllers;

use Auth;
use Request;
use DB;
use App\Library\Sql;
use App\Models\User;

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

	public function showEdit($user_id) {
		$user = new User($user_id);
		return view('editUser', ['user'=>$user]);
	}

	public function edit($user_id) {

		// $user = new User(Request::input('user_id'));

		// $user->first_name = Request::input('first_name');
		// $user->last_name  = Request::input('last_name');
		// $user->email      = Request::input('email');
		// $user_id          = $user->save();

		$first_name = Request::input('first_name');
		$last_name = Request::input('last_name');
		$email = Request::input('email');

		$user = new User($user_id);
		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->email = $email;

		$user->save();

		return view('userProfile/' . $user_id);



	}

}
