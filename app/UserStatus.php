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
    	$this->status = Status::where('user_id', auth()->id())->first();
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
		if($this->status()->hasForm() && !$this->status()->hasDocument())
    	{
    		return view('document.create',['student' => $this->student()]);
    	}
    	elseif($this->status()->hasForm() && $this->status()->hasDocument())
    	{
    		return redirect('/home');
    	}else{
    		return view('application.form');
    	}
	}
}
