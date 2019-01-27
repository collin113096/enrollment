<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests\ApplicationFormRequest;

class ApplicationController extends Controller
{

    public function create(){

    	return view('application.create');
    }

    public function store(ApplicationFormRequest $request, Student $student){

       $student = $student->saveFormData($request);
       // return redirect()->route('document.create',['student' => $form->getStudent()]);
    }
}
