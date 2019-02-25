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
        $teacher->subjects()->attach(request('subject_id'));
    	foreach(request('sections') as $sectionId)
    	{
    		$teacher->subject_sections()->attach($sectionId,['subject_id' =>request('subject_id')]);
    	}

    	return back();
    }
}
