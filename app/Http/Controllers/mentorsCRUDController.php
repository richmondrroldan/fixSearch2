<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

USE App\Mentors;

USE App\Skills;

class mentorsCRUDController extends Controller
{
    public function index(Skills $skill)
    {
        return view('mentorCRUD.index', compact('skill'));
         
        //Skills::orderBy('id','ASC')->paginate(5); Request $request, Skills $skill
        //return view('mentorCRUD.index',compact('skill'))
          //  ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function skills(Request $request)
    {
        $skills= Skills::all();
        return view('mentorVIEW.list',compact('skills'));
    }
    public function skillsA(Request $request)
    {
        $skills= Skills::all();
        return view('mentorCRUD.listA',compact('skills'));
    }
    public function mentor(Skills $skill)
    {

        return view('mentorVIEW.mentors',compact('skill'));
    }
    public function mentorA(Skills $skill)
    {

        return view('mentorCRUD.mentorsA',compact('skill'));
    }
    
    public function create()
    {   
        $skills = Skills::all();
        return view('mentorCRUD.create', compact('skills'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'skills_id' => 'required',
            'shortBio' => 'required',
        ]);
        Mentors::create($request->all());
        return redirect()->route('mentorsCRUD.index')
                        ->with('success','Mentor created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mentors= Mentors::find($id);
        return view('mentorVIEW.show',compact('mentors'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills= Skills::all();
        $mentors= Mentors::find($id);
        return view('mentorCRUD.edit',compact('mentors', 'skills'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'skills_id' => 'required',
            'shortBio' => 'required',
        ]);
        Mentors::find($id)->update($request->all());
        return redirect()->route('mentorsCRUD.skillsA')
                        ->with('success','Mentor updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mentors::find($id)->delete();
        return redirect()->route('mentorsCRUD.index')
                        ->with('success','Mentor deleted successfully');
    }

}
