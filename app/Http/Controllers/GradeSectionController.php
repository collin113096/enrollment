<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeSectionController extends Controller
{
    public function displaySections(\App\Grade $grade)
    {
    	session(['my_url' => 'grade']);
		return view('grade.sections', compact('grade'));
    }
}
