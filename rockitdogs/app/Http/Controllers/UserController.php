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

	public function delete($user_id) {

		$user = new User();
		$user->delete();
	}

}
