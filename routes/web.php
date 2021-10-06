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

// You can do coding with get
Route::get('/', function () {
    return view('frontend.home');
});
// its just for static website to show detials
Route::view('/service', 'frontend.service');
Route::view('/about', 'frontend.about');
Route::view('/gallery', 'frontend.gallery');


