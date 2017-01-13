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
Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', function() {  
    return Response::view('posts');
});

Route::get('posts-json', array(  
  'as' => 'posts-json', 
  'uses' => 'PostController@json' 
));