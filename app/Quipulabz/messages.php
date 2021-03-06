<?php

/*
|--------------------------------------------------------------------------
| Mensajes de respuesta del sistema
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::bind('mensaje.creacion', function($app){
    return ['tipo'=>'alert-success', 'mensaje'=>'Registro creado exitosamente.'];
});

App::bind('mensaje.eliminacion', function($app){
    return ['tipo'=>'alert-success', 'mensaje'=>'Registro eliminado exitosamente.'];
});

App::bind('mensaje.actualizacion', function($app){
    return ['tipo'=>'alert-success', 'mensaje'=>'Registro actualizado exitosamente.'];
});

App::bind('mensaje.actualizacion.error', function($app){
    return ['tipo'=>'alert-warning', 'mensaje'=>'No puedes actualizar este registro.'];
});

App::bind('mensaje.validacion.error', function($app){
    return ['tipo'=>'alert-warning', 'mensaje'=>'El registro tiene campos requeridos.'];
});

App::bind('mensaje.login.error', function($app){
    return ['tipo'=>'alert-danger', 'mensaje'=>'El usuario y/o contraseña es incorrecto.'];
});