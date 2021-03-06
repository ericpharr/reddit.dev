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

// Route::get('/', 'PostsController@index');
//
// Route::get('/uppercase/{word}', 'HomeController@uppercase');
//
// Route::get('/lowercase/{word}', 'HomeController@lowercase');
//
// Route::get('/increment/{number?}', 'HomeController@increment');
//
// Route::get('/resettozero', 'HomeController@resetToZero');
//
// Route::get('/add/{a}/{b}', function ($a, $b) {
//     if (is_numeric($a) && is_numeric($b)) {
//         return $a + $b;
//     } else {
//         return "202 + 202 = <h1>404</h1>";
//     }
//
// });
//
// Route::get('roll-dice/{guess}', function($guess){
//     $data['guess'] = $guess;
//     $data['roll'] = rand(1,6);
//
//     return view('roll-dice', $data);
// });

Route::resource("posts", "PostsController");

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
