<?php
/* Front */
Route::get('/', 'FrontController@index')->name('home');
Route::get('/posts', 'FrontController@showAllPosts');
Route::get('/posts/{id}','FrontController@showPost');
Route::get('/mentionslegales', 'FrontController@showLegalNotice');

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
	Route::post('questions/create-second-step', 'QuestionController@createSecondStep');
	/* Comments */
	Route::get('comments', 'CommentController@index')->name('teacher/comments');
	Route::put('comments/{id}', 'CommentController@update')->name('teacher/comments/update');
	Route::delete('comments/{id}', 'CommentController@destroy')->name('teacher/comments/delete');
});


/* Back : Student */
Route::namespace('Admin\Student')->prefix('student')->middleware(['auth', 'role'])->group(function() {
	Route::get('dashboard', 'DashboardController@index')->name('student/home');
	/* QCM */
	Route::get('qcm/index', 'QuestionController@index')->name('student/qcm/index');
	Route::get('qcm/question/doing/{id}', 'QuestionController@doing')->name('student/qcm/doing');
	Route::post('qcm/question/done/{id}', 'QuestionController@done')->name('student/qcm/done');
});
