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


/* Back : Teacher */
Route::namespace('Admin\Teacher')->prefix('teacher')->middleware(['auth', 'role:teacher'])->group(function() {
	Route::get('dashboard', 'DashboardController@index')->name('teacher/home');

	/* Articles */
	Route::resource('posts', 'PostController');

	/* QCM */
	Route::resource('questions', 'QuestionController');
	Route::post('questions/create-two', 'QuestionController@createTwo');
});


/* Back : Student */
Route::namespace('Admin\Student')->prefix('student')->middleware(['auth', 'role'])->group(function() {
	Route::get('dashboard', 'DashboardController@index')->name('student/home');
});
