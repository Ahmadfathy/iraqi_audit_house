<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::group(['prefix'=>'front'], function(){
    Route::get('/about', function () {
        return view('front/about');
    });
    Route::get('/contact', function () {
        return view('front/contact');
    })
    ;Route::get('/services', function () {
        return view('front/services');
    });
    Route::get('/team', function () {
        return view('front/team');
    });
});
