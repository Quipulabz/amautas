<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['before'=>'auth'], function(){

    Route::get('/logout', array(
        'as'    => 'user.logout',
        'uses'  => 'LoginController@getLogout'
    ));

    Route::get('/profile', array(
        'as'    => 'user.profile',
        'uses'  => 'UserController@profile'
    ));

});

Route::group(['before'=>'guest'], function(){

    Route::get('/login', array(
        'as'    => 'user.login',
        'uses'  => 'LoginController@getLogin'
    ));

});

Route::get('/', array(
    'as' => '/',
    function() {
        // $redis = Redis::connection();

        // $redis->set('hello', 'Hola mundo!');

        return View::make('hello');
    }
));

Route::post('/login', array(
    'as'    => 'user.login',
    'uses'  => 'LoginController@postLogin'
));

// Route::model('empleos', 'Empleo');

Route::resource('empleos', 'EmpleoController');