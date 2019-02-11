<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'classes';

    public function time()
    {
    	return $this->belongsTo('App\Time');
    }

    public function subject()
    {
    	return $this->belongsTo('App\Subject');
    }

    public function room()
    {
    	return $this->belongsTo('App\Room');
    }

    public function teacher()
    {
    	return $this->belongsTo('App\Teacher');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }
}
