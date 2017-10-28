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

//Home
Route::get('/',            ['as' => 'index', 'uses' => 'WelcomeController@index']);
Route::get('index',        ['as' => 'index', 'uses' => 'WelcomeController@index']);
Route::get('eventos',      ['as' => 'eventos', 'uses' => 'WelcomeController@eventos']);
Route::get('nosotros',     ['as' => 'nosotros', 'uses' => 'WelcomeController@nosotros']);
Route::get('unete',        ['as' => 'unete', 'uses' => 'WelcomeController@unete']);

Route::group(['prefix' => 'copios/2017'], function() {
    Route::get('/', ['as' => 'copios', 'uses' => 'CopiosController@index']);
    Route::get('que-es', ['as' => 'what-is', 'uses' => 'CopiosController@about']);
    Route::get('programa', ['as' => 'schedule', 'uses' => 'CopiosController@schedule']);
    Route::get('llamada-a-trabajos', ['as' => 'call-for-contributions', 'uses' => 'CopiosController@callForContributions']);
});

//TODO ver login y entrada a sistema...
//Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
