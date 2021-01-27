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

Auth::routes();

//Default route
Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('landing');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Movie Route

Route::group(['prefix' => 'view-movie'], function () {
    Route::get('/{id}/{title}', [\App\Http\Controllers\MovieController::class, 'index'])->name('view-movie');

    //post
    Route::post('watch-list', [\App\Http\Controllers\MovieController::class, 'watchListARP'])->name('wl-update');
});
//Dashboard Route
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
});

//Genres

Route::group(['prefix' => 'genre'], function () {
    Route::get('/genre/{id}/{name}', [\App\Http\Controllers\GenresController::class, 'index'])->name('genre');
});
