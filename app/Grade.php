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
}
