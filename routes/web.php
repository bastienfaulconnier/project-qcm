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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'FrontController@index')->name('home'); // route('home') // construit l'url  

Route::get('/posts/{id}','FrontController@showPost');
Route::get('/contact', 'FrontController@showContact');
Route::get('/mentionslegales', 'FrontController@showLegalNotice');
Route::get('/lycee', 'FrontController@showmegaLycee');

Route::any('login', 'Admin\LoginController@login')->name('login');
Route::get('logout', 'Admin\LoginController@logout')->name('logout');

/* Back Profs */
/* Route::group(['middleware' => 'auth'], function(){
	Route::get('dashboard', 'Admin\DashboardController@index');
	Route::resource('admin/robot', 'Admin\RobotController');
}); */

/* Back Eleves */
/* Route::group(['middleware' => 'auth'], function(){
	Route::get('dashboard', 'Admin\DashboardController@index');
	Route::resource('admin/qcmlist', 'Admin\RobotController');
}); */
