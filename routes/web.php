<?php

use App\Http\Controllers\accueilController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\mespageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\articlesController;
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

// Route::get('/accueil', function () {
//     return view('accueil');
// });
Route::get('accueil',[  accueilController::class,"index"])->name('accueil');



Route::get('/realisation', function () {
    return view('realisation');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('contact',[ContactController::class,"index"])->name('contact');
Route::post('/formulaire',[ContactController::class,"stored"])->name('formulaire');
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/informatique', function () {
    return view('informatique');
});
Route::get('/etude', function () {
    return view('etude');
});
Route::get('/barrage', function () {
    return view('barrage');
});
Route::get('/amenagement', function () {
    return view('amenagement');
});
Route::get('/developpement', function () {
    return view('developpement');
});
Route::get('/collect', function () {
    return view('collect');
});
Route::get('/formation', function () {
    return view('formation');
});
Route::get('/accompagner', function () {
    return view('accompagner');
});
Route::get('/conseil', function () {
    return view('conseil');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get("/articles",[articleController::class, "s"]);