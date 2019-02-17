<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Grade;

class SectionStudentController extends Controller
{
    public function displayStudents(Grade $grade, Section $section)
    {
    	return view('section.students',compact('grade') + compact('section'));
    }
}
