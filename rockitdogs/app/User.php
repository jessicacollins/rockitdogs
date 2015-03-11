<?php namespace App;

use DB;
use App\Models\Dog;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';
	protected $primaryKey = 'user_id';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['first_name', 'last_name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	public function getMyDogs(){
		$sql = 'select url, dog.name, user.user_id, dog.dog_id, image.image_id 
			from dog 
			left join dog_image using (dog_id) 
			left join image using (image_id) 
			left join user using (user_id) 
			where user_id = :user_id';
		$sql_values = [
			':user_id'=> $this->user_id
		];
		//dd($sql_values);
		$results = DB::select($sql,$sql_values);
		$dogs = [];
		foreach($results as $dogdata){
			$dog = new Dog();
			$dog->name = $dogdata->name;
			$dog->id = $dogdata->dog_id;
			$dog->user_id = $dogdata->user_id; 
			$dog->url = $dogdata->url;
			$dogs[] = $dog;
		}
		return $dogs;
	}
}


