<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    
    public function index()
    {
    	return view('website.index');
    }

    public function facebook()
    {
    	return redirect()->away('https://www.facebook.com/PagsanjanAcademyOfficial/');
    }
}
