<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    private $id;
    protected $guarded = [];

    public function father()
    {
    	return $this->hasOne('\App\Father');
    }

    public function mother()
    {
    	return $this->hasOne('\App\Mother');
    }

    public function documents()
    {
    	return $this->hasMany('\App\Document');
    }

    public function saveApplicationForm($request)
    {
        $validatedDataOf = $request->validated();

        $student = $this->create($validatedDataOf['student']);
        $student->father()->create($validatedDataOf['father']);
        $student->mother()->create($validatedDataOf['mother']);

        return $student;
    }

     public function saveDocument($request)
     {
        foreach($this->student()->documents as $document)
        {
            foreach($request->file($document) as $file)
            {
                $this->documents()->create([
                    'url' => $file->store('/'),
                    'document_type' => $this->type($document);
                ]);
            }
        }
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
