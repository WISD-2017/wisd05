<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoController extends Controller
{
    public function one(){
        return view('three');
    }
}
