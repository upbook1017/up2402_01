<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

//Route::get('hello', 'App\Http\Controllers\HelloController@index');
//Route::get('hello/other', 'App\Http\Controllers\HelloController@other');
Route::get('hello', 'App\Http\Controllers\HelloController@index');
//->middleware(HelloMiddleware::class);
Route::post('hello', 'App\Http\Controllers\HelloController@post');
/*Route::get('hello', function () {
    return view('hello.index'); });*/
Route::get('person', 'App\Http\Controllers\PersonController@index');
Route::get('person/find', 'App\Http\Controllers\PersonController@find');
Route::post('person/find', 'App\Http\Controllers\PersonController@search');
Route::get('person/add', 'App\Http\Controllers\PersonController@add');
Route::post('person/add', 'App\Http\Controllers\PersonController@create');

require __DIR__ . '/auth.php';
