<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Register;

class AdmittedController extends Controller
{
    
    public function index()
    {
    	$registers = DB::table('registers')->pluck('student_id');
    
    	$admittedApplicants = DB::table('students')
    	->whereNotIn('id',$registers->toArray())
    	->where('admitted',1)
    	->paginate(8);
    	
    	return view('admitted.index')->with(compact('admittedApplicants'));
    }
}
