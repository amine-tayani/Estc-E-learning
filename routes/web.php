<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('users/', 'UserController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/create-cours','CoursController@create')->name('create-cours')->middleware('auth:admin');
Route::post('/create-cours','CoursController@store')->name('create-cours.submit')->middleware('auth:admin');

Route::get('edit-cours/','CoursController@modifier')->middleware('auth:admin');
Route::get('cours/{id}/edit','CoursController@edit')->middleware('auth:admin');
Route::put('cours/{id}','CoursController@update')->name('cours.update')->middleware('auth:admin');
Route::delete('cours/{id}','CoursController@destroy')->middleware('auth:admin');

Route::get('/cours/view/{id}','CoursController@show');
Route::get('/cours/download/{file}','CoursController@download');



Route::get('/cours','CoursController@index');


Route::get('/travaux','TravauxController@index');

Route::prefix('admin')->group(function () {
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/','AdminController@index')->name('admin.dashboard');
});