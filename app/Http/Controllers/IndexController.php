<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index ()
    {
    	return view('home.index');
    }

    public function notebook ()
    {
    	return view('home.notebook');
    }
    
    public function computer ()
    {
    	return view('home.computer');
    }

    public function windows ()
    {
    	return view('home.windows');
    }

    public function about ()
    {
    	return view('home.about');
    }

    public function sitemap ()
    {
    	return view('home.sitemap');
    }

     public function contacts ()
    {
        return view('home.contacts');
    }
}
