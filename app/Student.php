<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    private $id;
    public $timestamps = false;
    protected $guarded = [];

    public function father(){

    	return $this->hasOne('\App\Father');
    }

    public function mother(){

    	return $this->hasOne('\App\Mother');
    }

    public function documents(){

    	return $this->hasMany('\App\Document');
    }

    public function saveFormData($request){
        $validatedData = $request->validated();

        $student = $this->create($validatedData['student']);
        $student->father()->create($validatedData['father']);
        $student->mother()->create($validatedData['mother']);

        return $student;
    }
}
