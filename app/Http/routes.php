<?php

// AUTHENTICATION ROUTES...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// REGISTRATION ROUTES...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// FRIENDSHIP ROUTES
Route::get('user/{user}/addFriend', [
	'as' => 'addFriend',
	'uses' => 'UserController@addFriend'
	]);

Route::get('friend/{user}/approveFriend', [
	'as' => 'approveFriend',
	'uses' => 'FriendController@approveFriend'
	]);

Route::get('friend/{user}/denyFriend', [
	'as' => 'denyFriend',
	'uses' => 'FriendController@denyFriend'
	]);



// RESOURCE ROUTES...
Route::resource('user', 'UserController', [
	'except'	=> ['create', 'store']
	]);

Route::get('blog/{blog}/api',[
	'as' => 'blog.api',
	'uses' => 'BlogController@api'
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
	'except' 	=> ['index', 'show', 'create']
	]);

Route::get('/', [
	'uses'		=> 'PagesController@index'
	]);

// ROUTE MODEL BINDINGS...
Route::bind('user', function($value) {
	return App\User::with('blog')->findOrFail($value);

});

Route::bind('blog', function($value) {
	// de-hyphenate the blog name
	$value = getNameForThisUrl($value);

	// return the Blog instance with the name of $value, with blogPosts
	return App\Blog::with('blogPost')->where('name', $value)->firstOrFail();
});

Route::bind('blogPost', function($value) {
	// de-hyphenate the blog name
	$value = getNameForThisUrl($value);

	// return the Blog instance with the name of $value, with blogPosts
	return App\BlogPost::with('photo')->where('title', $value)->firstOrFail();
});

Route::bind('photo', function($value) {
	return App\Photo::findOrFail($value);
});


