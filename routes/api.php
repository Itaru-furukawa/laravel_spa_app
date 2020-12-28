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
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::get('/tasks/{task}', 'TaskController@show');
Route::put('/tasks/{task}', 'TaskController@update');
Route::delete('/tasks/{task}', 'TaskController@destroy');

Route::get('/list', 'SougiController@index');
Route::post('/list', 'SougiController@store');
Route::get('/create', 'SougiController@index');
Route::post('/create', 'SougiController@store');
Route::get('/list/{list}','SougiController@show');
Route::put('/list/{list}', 'SougiController@update');
Route::delete('/list/{list}', 'SougiController@destroy');

Route::get('/estimate', 'EstimateController@index');
Route::post('/estimate', 'EstimateController@store');
Route::get('/estimate/{est}', 'EstimateController@show');
Route::put('/estimate/{est}' ,'EstimateController@update');
Route::delete('/estimate/{est}' ,'EstimateController@destroy');

Route::get('/manage', 'ManageController@index');
Route::get('/manage/show1', 'ManageController@showType1');
Route::get('/manage/show2', 'ManageController@showType2');
Route::get('/manage/show3', 'ManageController@showType3');
Route::post('/manage', 'ManageController@store');
Route::get('/manage/{est}', 'ManageController@show');
Route::put('/manage/{est}' ,'ManageController@update');
Route::delete('/manage/{est}' ,'ManageController@destroy');