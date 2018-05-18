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




Route::post('/save/query', 'ContactfromController@store');
Route::post('/newspost/save', 'TopnewsController@store');
Route::get('/newspostt', 'TopnewsController@all');
Route::delete('/newsdelete/{topnews}', 'TopnewsController@destroy');
Route::post('/calendarpost/save', 'CalendarOperationController@store');
Route::get('/calendarpostt', 'CalendarOperationController@all');
Route::get('/weatherapi/save','ApiController@all');
Route::get('/weatherapiresult/save','ApiController@all');
Route::post('/vacancypost/save','VacancypostController@store');
Route::post('/imagetry/save','ImagetryController@store');
Route::get('/googlemapapi/save','GooglemapController@store');



Route::get('/pigeons', 'PigeonController@paged');
Route::put('/pigeons/{pigeon}', 'PigeonController@update');