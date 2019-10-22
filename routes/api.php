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


Route::get('todos', 'TodoController@index');
Route::get('todos/{todo}', 'TodoController@show');
Route::post('todos','TodoController@store');
Route::post('todos/{todo_id}', 'TodoController@update');
Route::delete('todos/{todo}', 'TodoController@delete');