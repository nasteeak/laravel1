<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/second',[MainController::class,'show1']);

Route::get('/array', function (){
    return view('array');
});