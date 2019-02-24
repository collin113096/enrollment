<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function classes()
    {
    	return $this->hasMany('App\Class');
    }

    public function sections()
    {
    	return $this->belongsToMany('App\Section');
    }

    public function areAllAssigned()
    {
        return $this->where('assigned',0)->get()->isEmpty();
    }

    public function count()
    {
        return self::all()->count();
    }

    public function subjects()
    {
        return $this->belongstoMany('App\Subject');
    }

}
