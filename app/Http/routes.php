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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('generate');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/logos', 'LogoController@index');
Route::post('/logo', 'LogoController@store');
Route::delete('/logo/{logo}', 'LogoController@destroy');

Route::get('/test', function(Request $request) {
    $img = Image::canvas(300, 300, '#D63C3C');

    $img->text($request->input('name'), 150, 150, function($font) {
        $font->file(resource_path('assets/fonts/conthrax-sb.ttf'));
        $font->size(36);
        $font->color('#fdf6e3');
        $font->align('center');
        $font->valign('middle');
    });

    return $img->response('jpg');
});
