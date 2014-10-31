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
//Put user input in a variable
$paragraphnum = Input::get('paragraphs');
//call lorem ipsum generator
$generator = new LoremGenerator();
$paragraphs = $generator->getParagraphs($paragraphnum);
$makeparagraphs = implode('<p>', $paragraphs);
//make the view with passed data
return View::make('loremipsum')
	-> with ('paragraphnum', $paragraphnum)
	-> with ('create', $makeparagraphs);


});

//Show User Generator Page
Route::get('/usergenerator', function(){
	return View::make('randomuser');
});

//Process User Generation Request
Route::post('/usergenerator', function(){
//get the user input for the number of users they want
$users = Input::get('users');
$faker = Faker::create();
for ($i=0; $i<$users; $i++){
	 $names[$i]['name'] = ($faker->name);
};
return View::make('randomuser')
	-> with ('users', $users)
	-> with ('names', $names);

});

Route::get('/packagetest', function()
{

	
});
