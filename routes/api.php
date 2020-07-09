<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// List All Post
Route::get('/v1/posts', 'api\v1\PostsController@index');

// Input Data Post
Route::post('/v1/posts/store', 'api\v1\PostsController@store');

// Show ID
Route::get('/v1/posts/{id?}', 'api\v1\PostsController@show');

// Update Data Post
Route::post('/v1/posts/update', 'api\v1\PostsController@update');


// Delete Data Post
Route::delete('/v1/posts/{id?}', 'api\v1\PostsController@destroy');