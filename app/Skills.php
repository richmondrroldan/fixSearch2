<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model{
	public function mentors(){

    	return $this->hasMany(Mentors::class);
    }
}
