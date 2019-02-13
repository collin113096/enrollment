<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentController extends Controller
{
    
    public function subject(User $user)
    {
    	$classes = $user->student->grade->classes;
    	return view('student.subject', compact('classes'));
    }
}
