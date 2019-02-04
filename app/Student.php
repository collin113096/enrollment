<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function father() 
    {
    	return $this->hasOne('App\Father');
    }

    public function mother()
    {
    	return $this->hasOne('App\Mother');
    }

    public function documents()
    {
    	return $this->hasMany('App\Document');
    }

    public function sections(){

        return $this->belongsToMany('App\Section');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    // Non Relationship

    public function saveApplicationForm($validatedDataOf) 
    {
        $student = $this->create($validatedDataOf['student']);
        $student->father()->create($validatedDataOf['father']);
        $student->mother()->create($validatedDataOf['mother']);
        return $student;
    }

     public function saveDocument()
     {
        foreach($this->student()->neededDocuments as $neededDocument)
        {
            foreach(request($neededDocument) as $individualDocument)
            {
                $documentDetails = $this->details($individualDocument,$neededDocument);
                $this->documents()->create($documentDetails);
            }
        }
    }

    public function admitted(){
        $this->update([
            'admitted' => 1,
        ]);
    }

    private function details($individualDocument, $neededDocument)
    {
        return [
            'url' => $individualDocument->store('/'),
            'document_type' => $this->type($neededDocument)
        ];
    }

    private function type($document)
    {
        return title_case(str_replace('_',' ',$document));
    }

    private function student()
    {
        switch(request('student_type'))
        {
            case "New Student":
              return new \App\Document\NewStudent;
            case "Transferee Student":
              return new \App\Document\TransfereeStudent;
            case "Old Student":
              return new \App\Document\OldStudent;
        }
    }

}
