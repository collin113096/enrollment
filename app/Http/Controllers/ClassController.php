<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Time;
use App\Room;
use App\Teacher;
use App\Grade;
use App\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::paginate(8);
        return view('class.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('class.create',[
            'subjects' => Subject::orderBy('name')->get(),
            'times' => Time::orderBy('in')->get(),
            'rooms' => Room::orderBy('name')->get(),
            'teachers' => Teacher::orderBy('last_name')->get(),
            'grades' => Grade::orderBy('name')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Classes::create(request()->all());
        return redirect('/classes');
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
    public function edit(Classes $class)
    {
        return view('class.edit',[
            'subjects' => Subject::orderBy('name')->get(),
            'times' => Time::orderBy('in')->get(),
            'rooms' => Room::orderBy('name')->get(),
            'teachers' => Teacher::orderBy('last_name')->get(),
            'grades' => Grade::orderBy('name')->get(),
            'class' => $class,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Classes $class)
    {
        $class->update(request()->all());
        return redirect('/classes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $class)
    {
        $class->delete();
        return redirect('/classes');
    }
}
