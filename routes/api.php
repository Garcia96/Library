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

Route::get('editorial', 'EditorialController@index');
Route::get('editorial/{id}', 'EditorialController@show');
Route::post('editorial', 'EditorialController@store');
Route::put('editorial/{id}', 'EditorialController@update');
Route::delete('editorial/{id}', 'EditorialController@delete');


Route::get('author', 'AuthorController@index');
Route::get('author/{id}', 'AuthorController@show');
Route::post('author', 'AuthorController@store');
Route::put('author/{id}', 'AuthorController@update');
Route::delete('author/{id}', 'AuthorController@delete');


Route::get('book', 'BookController@index');
Route::get('book/{id}', 'BookController@show');
Route::post('book', 'BookController@store');
Route::put('book/{id}', 'BookController@update');
Route::delete('book/{id}', 'BookController@delete');