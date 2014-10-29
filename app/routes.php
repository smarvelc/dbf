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

//Homepage
Route::get('/', function()
{
	return View::make('index');
});

//Show Lorem Ipsum Generator Page
Route::get('/loremipsum', function(){
	return View::make('loremipsum');
});

//Process Lorem Ipsum Request
Route::post('/loremipsum', function(){


});

//Show User Generator Page
Route::get('/usergenerator', function(){
	return View::make('randomuser');
});

//Process User Generation Request
Route::post('/usergenerator', function(){


});
