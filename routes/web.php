<?php

use App\http\Controllers\ManiaController;
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

Route::get('/mania', 'App\Http\Controllers\ManiaController@index');
Route::get('/mania/kelipatantiga', 'App\Http\Controllers\ManiaController@kelipatanTiga');
Route::get('/mania/kelipatanlima', 'App\Http\Controllers\ManiaController@kelipatanLima');
Route::get('/mania/kelipatantigadanlima', 'App\Http\Controllers\ManiaController@kelipatanTigadanLima');