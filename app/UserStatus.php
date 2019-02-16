<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
	private $student;
	private $status;

	public function __construct()
	{
		$user = \App\User::find(auth()->id());
    	$this->student = $user->student;
    	$this->status = $user->status;
	}

	public function student()
	{
		return $this->student;
	}

	public function status()
	{
		return $this->status;
	}

	public function redirectToAppropriatePage()
	{
		if($this->status()->form && !$this->status()->document)
    	{
    		return view('document.create',['student' => $this->student()]);
    	}
    	elseif($this->status()->form && $this->status()->document)
    	{
    		return redirect('/home');
    	}else{
    		return view('application.form');
    	}
	}
}
