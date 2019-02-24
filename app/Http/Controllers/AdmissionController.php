<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Sms;

class AdmissionController extends Controller
{
    
    public function index(){
    	$students = Student::where('admitted',0)->latest()->paginate(8);
    	return view('applicant.index',compact('students'));
    }	

    public function show(Student $student){

    	return view('applicant.information',compact('student'));
    }

    public function update(Student $student, Sms $sms){

    	$student->admitted();
        // $sms->message("You're child is admitted to Pagsanjan Academy. To view payment procedure go to your account");
        // $sms->sentTo([$student->father->contact, $student->mother->contact]);
    	return redirect('/applicants');
    }
}
