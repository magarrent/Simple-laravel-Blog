<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Blog routes
Route::get('/', array('uses' => 'BlogController@allPosts'));
Route::get('/post/{slug}', array('uses' => 'BlogController@singlePost'));
Route::get('/contact', function(){return View::make('blog.contact');});
Route::post('/contact', array('uses' => 'BlogController@sendContact'));
Route::get('/category/{category}', array('uses' => 'BlogController@viewCategories'));

// Admin login
Route::get('/supersecret', array('uses' => 'AdminController@showLogin'));
Route::post('/supersecret', array('uses' => 'AdminController@postLogin'));
Route::get('/supersecret/logout', array('uses' => 'AdminController@logout'));

// Admin posts and categories
Route::get('supersecret/add', array('uses' => 'AdminController@addPost'));
Route::post('supersecret/add', array('uses' => 'AdminController@addPost_POST'));
Route::get('supersecret/delete/{id}', array('uses' => 'AdminController@deletePost'));
Route::get('supersecret/edit/{id}', array('uses' => 'AdminController@editPost'));
Route::post('supersecret/edit/{id}', array('uses' => 'AdminController@editPost_POST'));
Route::post('supersecret/category', array('uses' => 'AdminController@addCategory'));

// Admin users
Route::get('supersecret/users', array('uses' => 'AdminController@viewUsers'));
Route::get('supersecret/users/delete/{id}', array('uses' => 'AdminController@deleteUser'));
Route::get('supersecret/users/add', array('uses' => 'AdminController@addUser'));
Route::post('supersecret/users/add', array('uses' => 'AdminController@addUser_POST'));