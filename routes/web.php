<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	// C1 pass data to view
	// $tasks = [
	// 	'go to the store',
	// 	'go to the market',
	// 	'go to work'
	// ];

 //    return view('home', compact('tasks'), ['key1' => 'value1', 'request' => request('title')]);

    // C2 pass data to view
 	// return view('home')->with([
 	// 	'key1' => 'value1',
 	// 	'tasks' => [
 	// 		'go to the store',
		// 	'go to the market',
		// 	'go to work'
 	// 	]
 	// ]);
 	
 	// C3
 	return view('home')->withTasks([
 		'go to the store',
		'go to the market',
		'go to work'
 	])
 	->withKey1('value1');
});

Route::get('/about', function() {
	return view('about');
});

Route::get('/contact', function() {
	return view('contact');
});
