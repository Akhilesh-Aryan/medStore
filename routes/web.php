<?php

use App\Http\Controllers\Home;
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
Route::get('/insert', function() {
    return view('insert');
})->name('insertpage');
Route::get('/',[Home::class,"homepage"]);
Route::post('/',[Home::class,"insert"]);