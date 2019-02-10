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
    	return view('admitted.index',[
            'admittedApplicants' => Student::allAdmitted()->paginate(8)
        ]);
    }
}
