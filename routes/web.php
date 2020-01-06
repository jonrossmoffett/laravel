<?php

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

use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['articles' => $article = App\Article::take(3)->latest()->get()]);
});

Route::post('articles', 'ArticlesController@store');
Route::get('articles', 'ArticlesController@showAll');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{article}', 'ArticlesController@show');
Route::get('articles/{article}/edit', 'ArticlesController@edit');
route::put('articles/{article}', 'ArticlesController@update');
