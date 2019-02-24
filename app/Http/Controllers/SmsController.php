<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class SmsController extends Controller
{
    public function send(Student $student)
    {
    	dd(request()->all());
    }
}
