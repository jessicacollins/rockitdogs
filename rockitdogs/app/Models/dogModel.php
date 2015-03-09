<?php 

namespace App\Models;
use DB;
use App\Library\Sql;


class Dog extends Model {

    protected static $table = 'dog';
    protected static $key = 'dog_id';

}
