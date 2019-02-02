<?php

namespace App\Http\Controllers;
use App\Section;
use App\Teacher;
use Illuminate\Http\Request;

class AdvisoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::paginate(8);
        return view('advisory.index',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Section $section)
    {
        $teachers = Teacher::where('assigned',0)->paginate(8);
        return view('advisory.create',compact('section') + compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Section $section, Teacher $teacher)
    {
        $teacher->update(['assigned' => 1]);
        $section->teachers()->attach($teacher->id);
        
        return redirect('/advisory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $teachers = Teacher::where('assigned',0)->paginate(8);
        return view('advisory.edit',compact('section') + compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Section $section, Teacher $teacher)
    {
        $section->teachers()->first()->update(['assigned' => 0]);
        $teacher->update(['assigned' => 1]);
        $section->teachers()->first()->pivot->update(['teacher_id' => $teacher->id]);
        return redirect('/advisory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->teachers()->first()->update(['assigned' => false]);
        $section->teachers()->first()->pivot->delete();
        return redirect('/advisory');
    }
}
