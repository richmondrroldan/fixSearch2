<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class dropController extends Controller
{
    //
    public function myform(){
		$skills = DB::table("skills")->lists("name","id");
		return view('mentorCRUD.create',compact('skills'));
	}
}
