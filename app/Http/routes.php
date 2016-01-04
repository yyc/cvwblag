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

Route::get('/', "PostViewController@index");
Route::get('/home', "PostViewController@index");
Route::get('/index', "PostViewController@index");

Route::get("/new", "PostController@create");
Route::post("/new", "PostController@store");
Route::get("/post/{post}", "PostViewController@show");
Route::delete("/post/{post}", "PostController@delete");

Route::post("/post/{post}/comment", "PostViewController@comment");

// Authentication Routes...
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');
