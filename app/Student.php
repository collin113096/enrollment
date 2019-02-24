<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Register;
use App\Fee;
use Illuminate\Support\Facades\DB;

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

        return $this->belongsToMany('App\Section','registers');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

     public function registers()
    {
        return $this->hasMany('App\Register');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Non Relationship

    public function saveApplicationForm($validatedDataOf) 
    {
        $user = User::find(auth()->id());
        $user->status->update(['form' => true]);
        $student = $user->student()->create($validatedDataOf['student']);
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

    public function updateDocumentStatus()
    {
        $user = User::find(auth()->id());
        $user->status->update(['document' => true]);
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

    public function countApplicants()
    {
        return $this->where('admitted',0)->count();
    }

    public function countAdmitted()
    {
         return self::allAdmitted()->count();
    }

    public static function allAdmitted()
    {
        $registers = DB::table('registers')->pluck('student_id');
    
        return DB::table('students')
        ->whereNotIn('id',$registers->toArray())
        ->where('admitted',1);
    }

    public function isAdmitted()
    {
        return $this->admitted ? true : false;
    }

     public function isRegistered()
    {
         return DB::table('registers')->where('student_id',$this->id)->pluck('student_id')->first() ? true : false;
    }

    public function fee($payment_mode)
    {
        return Fee::where([
            ['payment_mode', $payment_mode],
            ['grade_id', $this->grade->id]
        ])->first();
    }

    public function haveDocuments()
    {
        return $this->documents->count() ? true:false;
    }
}
