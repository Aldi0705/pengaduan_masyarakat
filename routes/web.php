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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');

//user
Route::resource('/pengguna', 'UserController');
Route::post('/pengguna/create', 'UserController@create');
Route::post('/pengguna/store','UserController@store');
Route::patch('/pengguna/update','UserController@update');


//complain
Route::resource('/pengaduan', 'ComplaintController');
// Route::get('/table', 'TableController@index');
