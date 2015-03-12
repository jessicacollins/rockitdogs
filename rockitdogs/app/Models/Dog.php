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
      public function getAllImages(){
    	$sql = "select url, dog.name,dog.dog_id
				from dog 
				join dog_image using (dog_id)
				join image using(image_id)
				order by rand()
				";
		$results = DB::select($sql);

		$dogs = [];
		foreach($results as $dogdata){
			$dog = new Dog();
			$dog->name = $dogdata->name;
			$dog->id = $dogdata->dog_id;
			$dog->url = $dogdata->url;
			$dogs[] = $dog;
		}
		
		return $dogs;

    }

    public function getImageLoveCount($image_id) {
    	$sql = '
			select count(*) as count
			from love
			where image_id = :image_id;
    		';

		$sql_values = [':image_id' => $image_id];
		$results = DB::select($sql, $sql_values);



		return $results[0]->count;
    }
    
}