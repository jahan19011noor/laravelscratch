<?php

/*		Content for tutorial 1		*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*		Content for tutorial 1 ends		*/

/*		Content for tutorial 2		*/

Route::get('about', function(){
	$people = ['this', 'is', 'a', 'people', 'array'];

	return view('about', compact('people'));
});

/*		Content for tutorial 2 ends		*/

/*		Content for tutorial 7		*/

Route::get('/', 'PagesController@home');

Route::get('cards', 'cardsController@index');
Route::get('cardtitle/{title}', 'cardsController@show');
Route::get('cardwhole/{card}', 'cardsController@rmb');

/*		Content for tutorial 7 ends		*/

/*		Email template viewing and sending		*/

Route::get('emailflyer', 'EmailTemplateViewController@emailflyer');

Route::get('/email', 'EmailTemplateViewController@sendemail');

// function()
// {
// 	Mail::send('mailtext', ['name' => 'Noor Jahan'], function($message)
// 	{
// 		$message-send('jahannoor19011@gmail.com', "Noor Jahan")->from("othermail@some.com", "Noor")->subject('Welcome');
// 	});
// });

/*		Email template viewing and sending end		*/