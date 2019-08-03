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


Route::get('gifts', 'GiftController@index');
Route::get('gift/{id}', 'GiftController@show');
Route::post('gift', 'GiftController@store');
Route::put('gift/{id}', 'GiftController@update');
Route::delete('gift/{id}', 'GiftController@delete');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
