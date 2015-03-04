<?php namespace App\Http\Controllers;

use DB;
use App\Library\Sql;

class TestController extends Controller {


	public function testDB () {
		$users = DB::select('select * from user');
		
		return view("test", ["users"=>$users]);
	}

}

