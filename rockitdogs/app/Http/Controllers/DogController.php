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
		$tagline = Request::input('tagline');
		$birthday = Request::input('birthday');
		$breed = Request::input('breed');
		$gender = Request::input('gender');
		$weight = Request::input('weight');
		$temperament = Request::input('temperament');
		$license_id = Request::input('license_id');


		$dog = new Dog();
		$dog->user_id = $user_id;
		$dog->name = $name;
		$dog->tagline = $tagline;
		$dog->birthday = $birthday;
		$dog->breed = $breed;
		$dog->gender = $gender;
		$dog->weight = $weight;
		$dog->temperament = $temperament;
		$dog->license_id = $license_id;
		$dog->datetime_added = date('Y-m-d H:i:s');
		$dog->save();

		$pdo = DB::getPdo();
		$dog_id = $pdo->lastInsertId();

		return redirect('dogprofile/' . $dog_id);
	}

	public function getDog($dog_id) {
		$dog_id = new Dog($dog_id);


		return view('dogprofile', ['dog'=>$dog_id]);
	}

	public function showEdit($dog_id) {
		$dog = new Dog($dog_id);
		return view('editDogProfile', ['dog'=>$dog]);
	}

	public function edit($dog_id) {
		$dog = new Dog($dog_id);
		$dog->user_id = $user_id;
		$dog->name = $name;
		$dog->tagline = $tagline;
		$dog->birthday = $birthday;
		$dog->breed = $breed;
		$dog->gender = $gender;
		$dog->weight = $weight;
		$dog->temperament = $temperament;
		$dog->license_id = $license_id;
		$dog->datetime_added = date('Y-m-d H:i:s');
		$dog->save();

		return redirect('dogprofile/' . $dog_id);

	}

	public function delete($dog_id) {
		$sql = 'delete from dog where dog_id = :dog_id';
		$delete_values = ['dog_id' => $dog_id];

		$results = DB::select($sql, $delete_values);

	}
}