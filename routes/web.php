<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SharingFileController;


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
// Route::get('/upload', function(){
//     return view('upload');
// });

Route::post('/upload', [LinkController::class, 'store'])->name('upload');
Route::post('show', [SharingFileController::class, 'store'])->name('kirim');

// Route::get('/upload', [LinkController::class, 'index'])->name('upload');