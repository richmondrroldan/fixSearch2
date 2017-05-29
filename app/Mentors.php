<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentors extends Model
{
    public $fillable = ['name', 'skills_id', 'shortBio'];

    public function skills(){

    	return $this->belongsTo(Skills::class);

    }
}
