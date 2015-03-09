<?php namespace App\Http\Controllers;

// use DB;
// use App\Library\Sql;
use Auth;
use Request;
use DB;
use App\Library\Sql;

class DogController extends Controller {

	public function addDogForm() {
		$user_id = Auth::user()->user_id;
		return view('addDog', ['user_id'=>$user_id]);
	}

	public function addDog() {
		// Request::all();

		$user_id = Request::input('user_id');
		$name = Request::input('name');

		$sql = DB::insert("INSERT INTO dog (user_id, name) VALUES (':user_id', ':name')",
		[
		'user_id' => $user_id,
		'name' => $name
		]);

		echo "foo";

		//return redirect("home");


		// $dog = new Dog(); // Note it's an empty model since we didn't pass a number in

		// $dog->name  = 'William';

		// $dog_id = $dog->save();
	
	}

}