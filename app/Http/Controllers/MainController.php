<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view('home');
    }

    public function showArray(){
        return view('array', compact('array'));
    }
}
