<?php namespace App\Http\Controllers;

use Auth;
use Request;
use DB;
// use App\Library\Sql;
 use App\User;

class UserController extends Controller {
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function showProfile()
	{
		$u = Auth::user();
		$dogs = $u->getMyDogs();
		return view('userProfile', ['user'=>$u,'dogs'=>$dogs]);
	}

	public function showEdit($user_id) {
		$user = Auth::user();
		return view('editUser', ['user'=>$user]);
	}

	public function edit($user_id) {

		$first_name = Request::input('first_name');
		$last_name = Request::input('last_name');
		$email = Request::input('email');

		$user = Auth::user();
		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->email = $email;
		$user->save();
		return redirect('userprofile/' . $user_id);

	}

	public function addLove($image_id) {
		$user = Auth::user();
		$user->addLove($image_id);

		return redirect('community');
	}


}
