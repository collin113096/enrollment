<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionStudentController extends Controller
{
    public function displayStudents(Section $section)
    {
    	return view('section.students',compact('section'));
    }
}
