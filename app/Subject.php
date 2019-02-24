<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function teachers()
    {
    	return $this->belongsToMany('App\Teacher');
    }

    public function sections()
    {
        return $this->belongsToMany('App\Section');
    }
}
