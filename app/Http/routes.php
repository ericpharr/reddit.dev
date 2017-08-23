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

Route::get('/uppercase/{word}', function ($word) {
    return strtoupper($word);
});

Route::get('/increment/{number}', function ($number){
    return $number + 1;
});

Route::get('/add/{a}/{b}', function ($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "202 + 202 = <h1>404</h1>";
    }

});

Route::get('roll-dice/{guess}', function($guess){
    $data['guess'] = $guess;
    $data['roll'] = rand(1,6);

    return view('roll-dice', $data);
});
