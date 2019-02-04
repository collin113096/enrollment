<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function student()
    {
    	return $this->belongsTo('App\Student');
    }
}
