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

Route::get('/', array(
    'as' => '/',
    function() {
        return View::make('hello');
    }
));

Route::any('/login', array(
    'as'    => 'user/login',
    'uses'  => 'UserController@loginAction'
));

Route::any('/logout', array(
    'as'    => 'user/logout',
    'uses'  => 'UserController@logoutAction'
));

Route::get('/profile', array(
    'as'    => 'user/profile',
    'uses'  => 'UserController@profileAction'
));

Route::resource('empleos', 'EmpleoController');