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

Route::get('/', "PostController@index");
Route::get('/home', "PostController@index");
Route::get('/index', "PostController@index");

Route::get("/new", "PostController@create");
Route::post("/new", "PostController@store");
Route::get("/post/{post}", "PostController@show");
Route::delete("/post/{post}", "PostController@delete");

Route::post("/post/{post}/comment", "PostController@comment");

// Authentication Routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');
