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
    return view('home');
});
Route::get('/upload', function(){
    return view('upload');
});
Route::get('/show', function(){
    return view('show');
});
// Route::get('/upload', [LinkController::class, 'index'])->name('upload');