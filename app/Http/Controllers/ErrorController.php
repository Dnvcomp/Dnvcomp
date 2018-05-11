<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ErrorrController extends Controller
{

    public function errorCode404 ()
    {
    	return view ('errors.404');
    }
}