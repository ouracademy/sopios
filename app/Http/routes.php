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

//Contact us
Route::get('/contactenos',  ['as' => 'contactenos', 'uses' => 'AboutController@create']);
Route::post('/contactenos', ['as' => 'contact_store', 'uses' => 'AboutController@store']);

Route::group(['prefix' => 'copios/2017'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'CopiosController@index']);
    Route::get('que-es', ['as' => 'what-is', 'uses' => 'CopiosController@about']);
    Route::get('entrega-de-trabajos', ['as' => 'call-for-contributions', 'uses' => 'CopiosController@callForContributions']);
});

///Route::get('/copios/2017',   ['as' => 'copios', 'uses' => 'WelcomeController@copios']);


//Directive
// Route::group(['namespace' => 'Directive','prefix' => 'directive'], function()
// {
//     Route::resource('events', 'EventController');
// });

//TODO ver login y entrada a sistema...
//Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
