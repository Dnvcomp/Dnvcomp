<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WindowsController extends Controller
{
    public function windowsten ()
    {
    	return view('systems.windows-10');
    }

     public function windowsseven ()
    {
    	return view('systems.windows-7');
    }
}
