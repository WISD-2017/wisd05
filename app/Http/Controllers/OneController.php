<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{

    public function one()
    {
        return view('one');
    }
    public function two()
    {
        return view('two');
    }
    
}
