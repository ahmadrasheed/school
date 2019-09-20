<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List all posts
Route::get('posts','PostApiController@index');
// show only one post
Route::get('posts/{id}','PostApiController@show');
// store one post  
Route::post('posts','PostApiController@store');
//update a post
Route::put('posts/{id}','PostApiController@update');
// when updating, in postman app we should add params not in body and also not in raw.

//deleting a post
Route::delete('posts/{id}','PostApiController@destroy');


//  ----------- for handling FCM token  firebase Cloud Messaging ------------
Route::post('fcm','FcmController@store');

