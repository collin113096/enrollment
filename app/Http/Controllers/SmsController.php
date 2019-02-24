<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Sms;

class SmsController extends Controller
{
    public function send(Student $student,Sms $sms)
    {
    	$sms->message(request('message'));
    	$sms->sentTo([$student->father->contact, $student->mother->contact]);
    	$url = "/grade/{{ $student->grade->id }}/section/{{ $student->sections->first()->id }}/students";
    	return back();
    }
}
