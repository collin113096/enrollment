<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class DocumentController extends Controller
{
    
    public function create(Student $student){

    	return view('document.create',compact('student'));
    }

    public function store(Student $student){

        $student->saveDocument();
    }

}
