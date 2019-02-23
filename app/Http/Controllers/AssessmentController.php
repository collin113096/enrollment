<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function download(\App\Student $student, \App\Assessment $assessment)
    {
    	if(!$student->fee(request('payment_mode')))
    	{
    		return view('error_for_assessment');
    		return view('application.waiting_page', ['student' => $student]);
    	}
    	$html = view('assessment_form',[
    		'student' => $student, 
    		'fee' => $student->fee(request('payment_mode'))
    	]);
    	$assessment->showPdf($html);
    }
}
