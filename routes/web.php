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

Route::get('/pigeon', 'PigeonController@index');

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', function(){
    return view('Newsmain');
});
//Route::get('/contact', function(){
  //  return view('newscomponent.newscontactt');
//});
//Route::get('/home', function(){
  //  return view('newscomponent.newshome');
//});

