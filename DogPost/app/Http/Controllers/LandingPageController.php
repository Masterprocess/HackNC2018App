<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // The landing page

    public function welcome()
    {
    	return view('welcome');
    }
}
