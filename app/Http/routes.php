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
Route::get('article/{slug}',['as'=>'article.single','uses'=>'ArticleController@getSingle'])->where('slug','[\w\d\-\_]+');//blogcontrolleruread ..uses where you send it
Route::get('contact', 'PagesController@getContact');
Route::get('article',['uses'=>'ArticleController@getIndex', 'as'=>'article.index']);//show all blogposts
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');
