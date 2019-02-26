<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;
use Illuminate\Support\Facades\DB;

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

    public function destroy(Teacher $teacher)
    {
        $teacher->subjects()->detach(array_values(request('subject')));
       
        foreach(request('sections') as $sectionId)
        {
             DB::table('section_subject')->where([
                ['teacher_id',$teacher->id],
                ['subject_id', request('subject')]
               ])->delete();
        }
       return back();
    }

}
