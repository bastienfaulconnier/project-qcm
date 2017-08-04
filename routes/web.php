<?php
/* Front */
Route::get('/', 'FrontController@index')->name('home');
Route::get('/posts', 'FrontController@showAllPosts');
Route::get('/posts/{id}','FrontController@showPost');
Route::get('/contact', 'FrontController@showContact');
Route::get('/mentionslegales', 'FrontController@showLegalNotice');
Route::get('/lycee', 'FrontController@showLycee');


/* Auth */
Route::any('login', 'Admin\LoginController@login') ->name('login');
Route::get('logout', 'Admin\LoginController@logout') ->name('logout');

/* Back */
Route::group(['middleware' => 'auth'], function() {
	Route::get('dashboard', 'Admin\DashboardController@index');
});

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
