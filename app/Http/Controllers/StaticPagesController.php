<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function about()
    {
    	return view('static_page.about');
    }

    public function help()
    {
    	return view('static_page.help');
    }

    public function contact()
    {
    	return view('static_page.contact');
    }
}
