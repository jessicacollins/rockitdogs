<?php namespace App\Http\Controllers;

// use DB;
// use App\Library\Sql;
use Auth;
use Request;
use DB;
use App\Library\Sql;
use App\Models\Dog;

class DogController extends Controller {

	public function addDogForm() {
		$user_id = Auth::user()->user_id;
		return view('addDog', ['user_id'=>$user_id]);
	}

	public function addDog() {
		// Request::all();

		$user_id = Request::input('user_id');
		$name = Request::input('name');

		$dog = new Dog();
		$dog->user_id = $user_id;
		$dog->name = $name;
		$dog->save();

		return redirect('/dogprofile');
	}

}