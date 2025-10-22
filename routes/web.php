<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//hompepage
Route::get('/homepage',function(){
    return view('homepage');
});
//about
Route::get('/about',function(){
    return view('aboutpage');
});
Route::get('/location',function(){
    return view('location');
});

Route::get('/teknologi',function(){
    return view('teknologi');
});
