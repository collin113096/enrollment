<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function sections()
    {
    	return $this->hasMany('App\Section');
    }

    public function fees()
    {
    	return $this->hasMany('App\Fee');
    }

    public function students()
    {
    	return $this->hasMany('App\Student');
    }
    
}
