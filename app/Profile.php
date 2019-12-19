<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    

	public function posts()
	{
		return $this->hasMany('App\Post');
	}


}
