<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    private $data = [];

    public function grade()
    {
    	return $this->belongsTo('App\Grade');
    }

    public function init()
    {
    	$this->data['fees'] = self::paginate(8);
    }

    public function forRegistrar()
    {
    	$this->init();
        return view('fee.index',$this->data);
    }

    public function forStudent($gradeId)
    {
        $fees = self::all()->where('grade_id',$gradeId);
    	return view('fee.student',compact('fees'));
    }

    public function total()
    {
        return $this->registration + $this->tuition + $this->misc + $this->computer + $this->internet;
    }
}
