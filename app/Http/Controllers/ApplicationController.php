<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;

class ApplicationController extends Controller
{
    
    public function create(){

    	return view('application.create');
    }

    public function store(Student $student, Request $request){

    	$record = $student->create(
    		$request->except([
    			'father_name',
    			'father_occupation',
    			'father_contact',
    			'mother_name',
    			'mother_occupation',
    			'mother_contact'
    		])
    	);

    	$record->father()->create(
    	$request->only([
    			'father_name',
    			'father_occupation',
    			'father_contact',
    		])
        );

    	$record->mother()->create(
    		$request->only([
    			'mother_name',
    			'mother_occupation',
    			'mother_contact'
    		])
    	);
    }
}
