<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Student;
use App\Register;

class RegisterController extends Controller
{

	public function index()
	{
		$registers = Register::paginate(8);
		return view('register.index',compact('registers'));
	}
    
    public function create(Student $student)
    {
    	$sections = Section::orderBy('name')->get();
    	return view('register.create',compact('student') + compact('sections'));
    }

    public function store(Student $student)
    {
    	$student->registers()->create(request()->all());  
        return redirect('/registers');
    }

    public function edit(Register $register)
    {
    	$sections = Section::orderBy('name')->get();
    	return view('register.edit',compact('sections') + compact('register'));
    }

    public function update(Register $register)
    {
    	$register->update(request()->all());
    	return redirect('/registers');
    }

    public function destroy(Register $register)
    {
    	$register->delete();
    }
}
