<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function sections()
    {
        return $this->belongsToMany('App\Section');
    }

    public function notSelectedBefore($teacher)
    {
    	$teacher_subject = $teacher->subjects->pluck('id')->toArray();
    	return self::whereNotIn('id',$teacher_subject)->get();
    }
}
