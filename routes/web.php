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

Route::get('home', function () {
    return redirect('/settings');
});

Route::get('/', 'MainController@home');

Route::get('/faq', function () {
	return view('pages.faq');
});
Route::get('/api-docs', function () {
	return view('pages.api-docs');
});

// Contact
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

// Reports
Route::resource('reports', 'ReportController', ['only' => [
	'index', 'create', 'store'
]]);

Route::get('reports/{address}', 'ReportController@show');


Route::get('/big-banner', function() {
	return view('ads.sponsored-banner-iframe');
});