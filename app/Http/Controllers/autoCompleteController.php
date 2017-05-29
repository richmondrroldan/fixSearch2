<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mentors;

class autoCompleteController extends Controller
{
 	public function index(){
        return view('autocomplete.index');
    }
    public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
        $mentors=Mentors::where('details','LIKE','%'.$query.'%')->get();
        
        $data=array();
        foreach ($mentors as $mentor) {
                $data[]=array('value'=>$mentor->name,'id'=>$mentor->id, 'details'=>$mentor->details);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
 }
