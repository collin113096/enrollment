<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests\ApplicationFormRequest;

class ApplicationFormController extends Controller
{

    public function create(){

    	return view('application.form');
    }

    public function store(ApplicationFormRequest $request, Student $student){
   
       $student = $student->saveApplicationForm($request->validated());
       return redirect("/documents/$student->id");
    }
}
