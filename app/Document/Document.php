<?php

namespace App\Document;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{

     public function store($student, $request, $type){
 
    	foreach($type->docTypes as $docType){
    		$files = $request->file($docType);
    		foreach($files as $file){
    			$student->documents()->create([
	    			'url' => $file->store('/'),
	    			'document_type' => $this->removeUnderscore($docType)
    			]);
    		}
    	}
    }

    private function removeUnderscore($docType){
    		$data = explode('_', $docType);
    		$collection = [];
    		foreach($data as $datum){
    				array_push($collection,ucwords($datum)); 		
    		}

    		return implode(' ',$collection);
    }

}
