<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function registers()
    {
        return $this->hasMany('App\Register');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    // Secondary Relationship

    public function students(){

    	return $this->belongsToMany('App\Student');
    }

    public function hasAdviser()
    {
        return $this->teachers->count() >= 1 ? true:false;
    }

}
