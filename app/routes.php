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

// Patrones para las variables requeridas
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[a-z]\-+');

// Filtro Antes => Autorizado
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

// Filtro Antes => Invitado
Route::group(['before'=>'guest'], function(){

    Route::get('/login', array(
        'as'    => 'user.login',
        'uses'  => 'LoginController@getLogin'
    ));

    Route::get('/registro', array(
        'as'    => 'user.register',
        'uses'  => 'UserController@create'
    ));

});

Route::post('/login', array(
    'as'    => 'user.login',
    'uses'  => 'LoginController@postLogin'
));

Route::get('/', array(
    'as' => '/',
    'uses'  => 'HomeController@getWelcome'
));

Route::get('/mailer', array(
    'as' => 'mailer',
    function() {

        Mail::send('emails.respmail.mail', ['ciudad' => 'Trujillo'], function($message) {
            $message->to('nbpalomino@gmail.com', 'Nick B. Palomino')->subject('Noticias Semanales');
        });

        return 'Done';
    }
));

Route::resource('empleos', 'EmpleoController');
Route::resource('user', 'UserController');