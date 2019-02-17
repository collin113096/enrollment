<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    public $fillable = ['name','contact','suggestion','seen'];

    public function count()
    {
    	return self::all()->count();
    }
}
