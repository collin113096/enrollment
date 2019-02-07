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
    	$admittedApplicants = DB::table('students')
    	->where('admitted',1)
    	->whereNotIn('id',DB::table('registers')->pluck('id'))
    	->paginate(8);
    	return view('admitted.index')->with(compact('admittedApplicants'));
    }
}
