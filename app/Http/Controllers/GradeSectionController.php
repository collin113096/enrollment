<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Section;

class GradeSectionController extends Controller
{
    public function displaySections(Grade $grade)
    {
    	session(['my_url' => 'grade']);
		return view('grade.sections', compact('grade'));
    }

    public function displayStudents(Grade $grade, Section $section)
    {
		return view('grade.sections', compact('grade') + compact('section'));
    }

}
