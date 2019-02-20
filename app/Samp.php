<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samp extends Model
{
	private $message = "Pagsanjan Academy Online Enrollment";

    public function sentTo($contacts)
    {
    	foreach($contacts as $contact)
    	{
    		$this->itextmo($contact, $this->message, env('ITEXTMO_API'));
    	}
    }

    public function itextmo($contact,$message,$apicode){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $contact, '2' => $message, '3' => $apicode);
		$param = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($itexmo),
		    ),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
	}

	public function message($text)
	{
		$this->message = $text;
	}
}
