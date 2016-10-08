<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

// Catch-All Route
Route::get('{path}', function ($path) {
	$data = "";
  	$content = React::renderMarkup([ "path" => $path, "data" => $data ]);

    return view('index', [ "content" => $content,
                 		   "data" => json_encode($data) ]);
})->where('path', '(.*)');

