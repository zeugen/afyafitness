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
//auth routes
Route::get('auth/login',['as'=>'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout',['as'=>'logout', 'uses'=>'Auth\AuthController@getLogout']);
//Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//password reset routes
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');//houses the form that generates the token>adds the token to the url (?is optional)
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');//this will will trigger the email
Route::post('password/reset', 'Auth\PasswordController@reset');

Route::get('article/{slug}',['as'=>'article.single','uses'=>'ArticleController@getSingle'])->where('slug','[\w\d\-\_]+');//blogcontrolleruread ..uses where you send it
Route::get('contact', 'PagesController@getContact');
Route::get('article',['uses'=>'ArticleController@getIndex', 'as'=>'article.index']);//show all blogposts
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');
