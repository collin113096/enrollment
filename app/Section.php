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
}
