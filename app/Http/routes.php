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

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
route::get('contact', 'PagesController@contact');
route::get('menu', 'PagesController@menu');

Route::get('/blog', 'BlogController@index');

//Route::get('blog/{{slug}}', 'BlogController@showPost');
