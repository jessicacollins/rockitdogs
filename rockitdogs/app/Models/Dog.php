<?php 
namespace App\Models;

use DB;
//use App\Library\Sql;


class Dog extends Model {
    protected static $table = 'dog';
    protected static $key = 'dog_id';

    public function getImageUrl(){
    	$sql = "select url
				from dog_image 
				join image using (image_id)
				where dog_id = :dog_id";
		$sql_values = [':dog_id' => $this->dog_id];
		$results = DB::select($sql,$sql_values);
		$url = $results[0]->url;

		return $url;
    }
}