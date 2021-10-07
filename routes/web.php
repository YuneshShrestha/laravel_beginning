<?php

use App\Http\Controllers\PageController;
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
Route::get('/about', [PageController::class, 'about']);
Route::get('/service', [PageController::class, 'service']);
Route::get('/gallery',[PageController::class, 'gallery']);
// its just for static website to show detials
// Route::view('/service', 'frontend.service');

// Route::view('/gallery', 'frontend.gallery');


