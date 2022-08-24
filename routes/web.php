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

Route::get('/accueil', function () {
    return view('accueil');
});


Route::get('/realisation', function () {
    return view('realisation');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/informatique', function () {
    return view('informatique');
});
Route::get('/etude', function () {
    return view('etude');
});
Route::get('/barrage', function () {
    return view('barrage');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
