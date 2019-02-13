<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Status;
use App\User;
use App\UserStatus;
use App\Http\Requests\ApplicationFormRequest;

class ApplicationFormController extends Controller
{

    public function create(UserStatus $user)
    {
    	return $user->redirectToAppropriatePage();
    }

    public function store(ApplicationFormRequest $request, Student $student){
   
       $student = $student->saveApplicationForm($request->validated());
       return redirect("/documents");
    }
}
