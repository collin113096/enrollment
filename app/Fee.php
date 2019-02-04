<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function grade()
    {
    	return $this->belongsTo('App\Grade');
    }
}
