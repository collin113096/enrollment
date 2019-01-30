<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class AdmissionController extends Controller
{
    
    public function index(){
    	$students = Student::where('admitted',0)->latest()->paginate(8);
    	return view('applicant.index',compact('students'));
    }	

    public function showApplicationForm(Student $student){

        return view('applicant.form',compact('student'));
    }

    public function showDocuments(Student $student){

    	return view('applicant.document',compact('student'));
    }

    public function update(Student $student){

    	$student->admitted();
    	return redirect('/applicants');
    }
}