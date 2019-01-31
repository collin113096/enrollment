<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function students(){

    	return $this->belongsToMany('App\Student');
    }

    public function grade()
    {
    	return $this->belongsTo('App\Grade');
    }

    public function teachers()
    {
    	return $this->belongsToMany('App\Teacher');
    }

    public function classes()
    {
        return $this->hasMany('App\Class');
    }
}
