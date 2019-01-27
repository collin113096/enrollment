<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Document\Document;

class DocumentController extends Controller
{
    
    public function create(){

    	return view('document.create');
    }

    public function store(Request $request, Document $document){

   		$student = Student::find(1);
   		$document->store($student, $request, $this->getDocumentTypes($request));
  
    }

    private function getDocumentTypes($request){

        switch($request->input('student_type')){
            case "New Student":
              $document = new \App\Document\NewStudentDocument;
              break;
            case "Transferee Student":
              $document = new \App\Document\TransfereeStudentDocument;
              break;
            case "Old Student":
              $document = new \App\Document\OldStudentDocument;
              break;
        }
        return $document;
    }

}
