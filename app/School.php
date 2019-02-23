<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public static function year()
    {
    	$currentYear = date('Y');
    	return self::where('year','like',"$currentYear%")->first()->year;
    }

    public static function name()
    {
    	return self::first()->name;
    }

     public static function address()
    {
    	return self::first()->address;
    }

     public static function contact()
    {
    	return self::first()->contact;
    }
}
