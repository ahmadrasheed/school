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

Route::get('/', function () {
    return view('home');
});

Auth::routes();


Route::resource('posts', 'PostController')->middleware('auth');



// for visitor    (not admin)
Route::get('/', 'VisitorController@index')->name('home');
Route::get('show/{id}','VisitorController@show')->name('visitor.show.post');
//