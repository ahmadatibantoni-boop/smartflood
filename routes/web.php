<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

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

Route::get('/sensor', [SensorController::class, 'showForm']);
Route::post('/hasil-sensor', [SensorController::class, 'prosesData']);
