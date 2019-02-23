<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class AssessmentController extends Controller
{
    public function download()
    {
    	PDF::SetTitle('Hello World');
    	PDF::AddPage();
    	PDF::Write(0,'Hello World');
    	PDF::Output('hello_world.pdf');
    }
}
