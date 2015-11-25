<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// App routes...
Route::resource('blog', 'BlogController');
Route::resource('blog.blogPost', 'BlogPostController', [
	'except'	=> ['index']
	]);

Route::get('/blogPost', [
	'uses'		=> 'BlogPostController@index',
	'as'		=> 'blogPosts.index'
	]);

Route::get('/', [
	'as' => 'index', 
	'uses' => 'PagesController@index'
	]);



// use slugs rather than IDs in URLs
Route::bind('blog', function($value) {
	// de-hyphenate the blog name
	$value = str_replace('-', ' ', $value);

	// return the Blog instance with the name of $value, with blogPosts
	return App\Blog::with('blogPosts')->where('name', $value)->first();
});

Route::bind('blogPost', function($value) {
	// de-hyphenate the blog name
	$value = str_replace('-', ' ', $value);

	// return the Blog instance with the name of $value, with blogPosts
	return App\BlogPost::with('photo')->where('title', $value)->first();
});