<?php

// AUTHENTICATION ROUTES...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// REGISTRATION ROUTES...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// APP ROUTES...
Route::resource('user', 'UserController', [
	'except'	=> ['index', 'create', 'store']
	]);

Route::resource('blog', 'BlogController', [
	'except'	=> ['create', 'delete', 'store']
	]);

Route::resource('blog.blogPost', 'BlogPostController');

Route::get('/blogPost', [
	'uses'		=> 'BlogPostController@index',
	'as'		=> 'blogPosts.index'
	]);

Route::resource('blog.blogPost.photo', 'PhotoController',[
	'only' 	=> ['store', 'destroy']
	]);

Route::get('/', [
	'as' => 'index', 
	'uses' => 'PagesController@index'
	]);

// ROUTE MODEL BINDINGS...
Route::bind('user', function($value) {
	return App\User::with('blog')->findOrFail($value);

});

Route::bind('blog', function($value) {
	// de-hyphenate the blog name
	$value = str_replace('-', ' ', $value);

	// return the Blog instance with the name of $value, with blogPosts
	return App\Blog::with('blogPost')->where('name', $value)->first();
});

Route::bind('blogPost', function($value) {
	// de-hyphenate the blog name
	$value = str_replace('-', ' ', $value);

	// return the Blog instance with the name of $value, with blogPosts
	return App\BlogPost::with('photo')->where('title', $value)->first();
});

Route::bind('photo', function($value) {
	return App\Photo::findOrFail($value);
});