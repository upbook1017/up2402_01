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
Route::get('person/show/{person}', 'App\Http\Controllers\PersonController@show')->name('person.show');//showアクション(アドレスにid入力で表示)
Route::get('person/add2', 'App\Http\Controllers\PersonController@add2')->name('person.add2');
Route::post('person/add2', 'App\Http\Controllers\PersonController@store')->name('person.add2');

Route::get('board', 'App\Http\Controllers\BoardController@index');
Route::get('board/add', 'App\Http\Controllers\BoardController@add');
Route::post('board/add', 'App\Http\Controllers\BoardController@createadd');
Route::post('person/show/{person}', 'App\Http\Controllers\BoardController@create')->name('person.show');///////投稿ページで新規投稿作成
Route::get('board/show/{item}', 'App\Http\Controllers\BoardController@show');//showアクション(アドレスにid入力で表示)

require __DIR__ . '/auth.php';
