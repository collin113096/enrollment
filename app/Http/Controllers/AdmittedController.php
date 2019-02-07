<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class AdmittedController extends Controller
{
    
    public function index()
    {
    	$admittedApplicants = Student::where('admitted',1)->paginate(8);
    	return view('admitted.index')->with(compact('admittedApplicants'));
    }
}
