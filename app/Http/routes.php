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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/contact', 'HomeController@contact');

Route::get('/printable', 'HomeController@printable');

Route::get('/cv', 'CvController@coverLetter');

Route::get('/work', 'CvController@work');

Route::get('/skills', 'CvController@skills');

Route::get('/hire', 'CvController@hire');
