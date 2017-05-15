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

Route::get('welcome', function () {
    return view('welcome');
});

//shouye
Route::get('/', 'HomeController@home')->name('home');
//home page
Route::get('/', 'StaticPagesController@home')->name('home');
//about page
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('errors', function() {
    return view('errors.503',['message' => '503 ERROR']);
});
Route::get('name/{name}', function ($name) {
    return 'I`m '.$name;
});

Route::get('/user/name', 'User\UserController@name');
Route::get('/user/age', 'UserController@age');
Route::get('/user/intro', 'UserController@intro');
Route::get('/user/{id}', 'UserController@show');
Route::get('/young/{age}', 'UserController@young')->middleware('young');
