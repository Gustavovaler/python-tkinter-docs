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

Route::get('/clase_tk',function () {
    return view('clase_tk');
});

Route::get('/widgets',function () {
    return view('widgets');
});
Route::get('/colores',function () {
    return view('colores');
});