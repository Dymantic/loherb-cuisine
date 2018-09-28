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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect']], function() {
    Route::get('/', 'PagesController@home');

    Route::get('about', 'PagesController@about');

    Route::get('menu', 'MenuController@index');
    Route::get('menu/mains', 'MenuController@mains');
    Route::get('menu/appetizers', 'MenuController@appetizers');
    Route::get('menu/desserts', 'MenuController@desserts');
    Route::get('menu/drinks', 'MenuController@drinks');

    Route::get('blog', 'BlogController@index');
    Route::get('blog/{slug}', 'BlogController@show');

    Route::get('contact', 'ContactController@create');

});

Route::post('contact', 'ContactController@store');