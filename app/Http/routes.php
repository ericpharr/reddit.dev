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

Route::get('/uppercase/{word}', 'HomeController@uppercase');

Route::get('/lowercase/{word}', 'HomeController@lowercase');

Route::get('/increment/{number?}', 'HomeController@increment');

Route::get('/resettozero', 'HomeController@resetToZero');

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

Route::resource("posts", "PostsController");

Route::get('orm-test', function ()
{
    // test code here
    $post1 = new \App\Models\Post();
    $post1->title = 'Eloquent is awesome!';
    $post1->url='https://laravel.com/docs/5.1/eloquent';
    $post1->content  = 'It is super easy to create a new post.';
    $post1->created_by = 1;
    $post1->save();

    $post2 = new \App\Models\Post();
    $post2->title = 'Eloquent is really easy!';
    $post2->url='https://laravel.com/docs/5.1/eloquent';
    $post2->content = 'It is super easy to create a new post.';
    $post2->created_by = 1;
    $post2->save();
});
