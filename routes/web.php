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

Route::get('travaux/', 'ExoController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// les routes de gestion 
Route::get('/gestion-cours', 'AdminController@cours')->name('gestion-cours')->middleware('auth:admin');
Route::get('/gestion-partie', 'AdminController@partie')->name('gestion-partie')->middleware('auth:admin');
Route::get('/gestion-td', 'AdminController@td')->name('gestion-td')->middleware('auth:admin');
Route::get('/gestion-tp', 'AdminController@tp')->name('gestion-tp')->middleware('auth:admin');
Route::get('/gestion-quiz', 'AdminController@quiz')->name('gestion-quiz')->middleware('auth:admin');
Route::get('/gestion-video', 'AdminController@video')->name('gestion-video')->middleware('auth:admin');



// les routes de Cours Crud
Route::get('/create-cours','CoursController@create')->name('create-cours')->middleware('auth:admin');
Route::post('/create-cours','CoursController@store')->name('create-cours.submit')->middleware('auth:admin');
Route::get('edit-cours/','CoursController@modifier')->middleware('auth:admin');
Route::get('cours/{id}/edit','CoursController@edit')->middleware('auth:admin');
Route::put('cours/{id}','CoursController@update')->name('cours.update')->middleware('auth:admin');
Route::delete('cours/{cours}','CoursController@destroy')->name('cours.delete')->middleware('auth:admin');
Route::get('/cours/view/{id}','CoursController@show');
Route::get('/cours/download/{file}','CoursController@download');
Route::get('/cours','CoursController@index');


// les routes de td Crud
Route::get('/create-td','TdController@create')->name('create-td')->middleware('auth:admin');
Route::post('/create-td','TdController@store')->name('create-td.submit')->middleware('auth:admin');
Route::get('edit-td/','TdController@modifier')->middleware('auth:admin');
Route::get('td/{id}/edit','TdController@edit')->middleware('auth:admin');
Route::put('td/{id}','TdController@update')->name('td.update')->middleware('auth:admin');
Route::delete('td/{td}','TdController@destroy')->name('td.delete')->middleware('auth:admin');
Route::get('/td/view/{id}','TdController@show');
Route::get('/td/download/{file}','TdController@download');
Route::get('/td','TdController@index');


// les routes de tp Crud
Route::get('/create-tp','TpController@create')->name('create-tp')->middleware('auth:admin');
Route::post('/create-tp','TpController@store')->name('create-tp.submit')->middleware('auth:admin');
Route::get('edit-tp/','TpController@modifier')->middleware('auth:admin');
Route::get('tp/{id}/edit','TpController@edit')->middleware('auth:admin');
Route::put('tp/{id}','TpController@update')->name('tp.update')->middleware('auth:admin');
Route::delete('tp/{tp}','TpController@destroy')->name('tp.delete')->middleware('auth:admin');
Route::get('/tp/view/{id}','TpController@show');
Route::get('/tp/download/{file}','TpController@download');
Route::get('/tp','TpController@index');





// les routes de partie Crud
Route::get('/create-partie','PartieController@create')->name('create-partie')->middleware('auth:admin');
Route::post('/create-partie','PartieController@store')->name('create-partie.submit')->middleware('auth:admin');
Route::get('edit-partie/','PartieController@modifier')->middleware('auth:admin');
Route::get('partie/{id}/edit','PartieController@edit')->middleware('auth:admin');
Route::put('partie/{id}','PartieController@update')->name('partie.update')->middleware('auth:admin');
Route::delete('partie/{id}','PartieController@destroy')->name('partie.delete')->middleware('auth:admin');
Route::get('/partie','PartieController@index');


// les routes de video Crud
Route::get('/create-video','VideoController@create')->name('create-video')->middleware('auth:admin');
Route::post('/create-video','VideoController@store')->name('create-video.submit')->middleware('auth:admin');
Route::get('edit-video/','VideoController@modifier')->middleware('auth:admin');
Route::get('video/{id}/edit','VideoController@edit')->middleware('auth:admin');
Route::put('video/{id}','VideoController@update')->name('video.update')->middleware('auth:admin');
Route::delete('video/{tp}','VideoController@destroy')->name('video.delete')->middleware('auth:admin');
Route::get('/video/view/{id}','VideoController@show');
Route::get('/video/download/{file}','VideoController@download');
Route::get('/video','VideoController@index');




// les routes de quiz Crud
Route::get('/create-quiz','QuizController@create')->name('create-quiz')->middleware('auth:admin');
Route::post('/create-quiz','QuizController@store')->name('create-quiz.submit')->middleware('auth:admin');
Route::get('edit-quiz/','QuizController@modifier')->middleware('auth:admin');
Route::get('quiz/{id}/edit','QuizController@edit')->middleware('auth:admin');
Route::put('quiz/{id}','QuizController@update')->name('quiz.update')->middleware('auth:admin');
Route::delete('quiz/{id}','QuizController@destroy')->name('quiz.delete')->middleware('auth:admin');
Route::get('/quiz','QuizController@index');








// admin routes
Route::prefix('admin')->group(function () {
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/','AdminController@index')->name('admin.dashboard');
});