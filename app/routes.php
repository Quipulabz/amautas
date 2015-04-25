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
//Route::pattern('slug', '[a-z]\-+');

// Filtro Antes => Autorizado
Route::group(['before'=>'auth'], function(){

    Route::get('/salir', array(
        'as'    => 'user.logout',
        'uses'  => 'LoginController@getLogout'
    ));

    Route::get('/perfil', array(
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

// Route::resource('empleos', 'EmpleoController');
Route::group(['prefix' => '/empleos'], function()
{
    $rutas = [
        //[Verbo,  Metodo,       URL]
        ['get',    'index',     '/'],
        ['get',    'create',    '/create'],
        ['post',   'store',     '/'],        
        ['get',    'edit',      '/{id}/{slug}/edit'],
        ['put',    'update',    '/{id}/{slug}'],
        ['get',    'show',      '/{id}/{slug}'],
        ['delete', 'destroy',   '/{id}/{slug}'],
    ];

    foreach ( $rutas as list($verb, $method, $uri) ) {
        Route::$verb($uri, [
            'as'    => "empleos.{$method}",
            'uses'  => "EmpleoController@{$method}"
        ]);
    }
    /*
    Route::get('/', [
        'as'    => 'empleos.index',
        'uses'  => 'EmpleoController@index'
    ]);

    Route::get('/create', [
        'as'    => 'empleos.create',
        'uses'  => 'EmpleoController@create'
    ]);

    Route::post('/', [
        'as'    => 'empleos.store',
        'uses'  => 'EmpleoController@store'
    ]);    

    Route::get('/{id}/{slug}/edit', [
        'as'    => 'empleos.edit',
        'uses'  => 'EmpleoController@edit'
    ]);

    Route::put('/{id}/{slug}', [
        'as'    => 'empleos.update',
        'uses'  => 'EmpleoController@update'
    ]);

    Route::get('/{id}/{slug}', [
        'as'    => 'empleos.show',
        'uses'  => 'EmpleoController@show'
    ]);

    Route::delete('/{id}/{slug}', [
        'as'    => 'empleos.destroy',
        'uses'  => 'EmpleoController@destroy'
    ]);
    */
});

Route::resource('user', 'UserController');