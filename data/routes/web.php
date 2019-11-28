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
    return view('welcome');
});


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('animals', 'AnimalController');



Route::middleware('auth')->group(function () {
  Route::resource('users', 'UserController');
  Route::resource('races', 'RaceController');

  Route::get('/animals/{id}/destroy', 'AnimalController@destroy');
  Route::post('/animals/{id}/update', 'AnimalController@update');

  Route::get('/races/{id}/destroy', 'RaceController@destroy');
  Route::post('/races/{id}/update', 'RaceController@update');

  Route::get('/users/{id}/destroy', 'UserController@destroy');
  Route::post('/users/{id}/update', 'UserController@update');
});
