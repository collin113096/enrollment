<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class PayrollController extends Controller
{
    
    public function allTeachers()
    {
    	$teachers = Teacher::all();
    	return view('payroll.all_teachers', compact('teachers'));
    }

    public function showTeacher(Teacher $teacher)
    {
    	return $teacher;
    }
}
