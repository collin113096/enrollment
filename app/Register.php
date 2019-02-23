<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $guarded = [];

    public function section()
    {
    	return $this->belongsTo('App\Section');
    }

    public function student()
    {
    	return $this->belongsTo('App\Student');
    }

    public function count()
    {
        return $this->all()->count();
    }
}
