<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;

class PayrollController extends Controller
{
    
    public function allTeachers()
    {
    	$teachers = Teacher::all();
    	return view('payroll.all_teachers', compact('teachers'));
    }

    public function showTeacher(Teacher $teacher)
    {
    	return view('payroll.teacher_subjects', compact('teacher'));
    }

    public function addSubject(Teacher $teacher)
    {
    	$subject = Subject::find(request('subject'));
    	foreach(request('sections') as $sectionId)
    	{
    		$subject->sections()->attach($sectionId,['teacher_id' => $teacher->id]);
    	}

    	return back();
    }
}
