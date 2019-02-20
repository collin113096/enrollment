<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\UserStatus;

class DocumentController extends Controller
{
    
    public function create(UserStatus $user)
    {
    	return $user->redirectToAppropriatePage();
    }

    public function store(Student $student, Sms $sms){

        $student->saveDocument();
        $student->updateDocumentStatus();
        return redirect('/home');
    }

}
