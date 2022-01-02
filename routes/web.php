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
    return view('welcome');
});


Route::prefix('words')->group(function(){
  Route::get('/', '\App\Http\Controllers\WordsController@index')->name("words");
  Route::post('/add', '\App\Http\Controllers\WordsController@add')->name("words_add");
});
