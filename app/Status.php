<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

     public function hasForm()
    {
        return $this->where('form',1)->count() ? true : false;
    }

    public function hasDocument()
    {
        return $this->where('document',1)->count() ? true : false;
    }
}
