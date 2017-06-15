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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/logos', 'LogoController@index');
Route::post('/logo', 'LogoController@store');
Route::delete('/logo/{logo}', 'LogoController@destroy');

Route::get('/test', function()
{
    $img = Image::canvas(300, 200, '#ff0000');

    $img->text('Alfabravo', 150, 100, function($font) {
        $font->file(resource_path('assets/fonts/conthrax-sb.ttf'));
        $font->size(24);
        $font->color('#fdf6e3');
        $font->align('center');
        $font->valign('middle');
    });

    return $img->response('jpg');
});
