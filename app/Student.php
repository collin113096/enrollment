<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
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
}
