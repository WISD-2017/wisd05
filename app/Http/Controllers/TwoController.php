<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoController extends Controller
{
    public function one(){
        return view('three');
    }
    public function two(){
        return view('four');
    }
}
