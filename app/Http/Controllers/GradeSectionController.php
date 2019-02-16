<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeSectionController extends Controller
{
    public function displaySections(\App\Grade $grade)
    {
		$sections = $grade->sections;
		return view('grade.sections', compact('sections'));
    }
}
