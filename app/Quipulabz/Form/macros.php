<?php

Form::macro('entities', function($name, $entity, $selected = 0, $options = [])
{
    $values = [0 => 'Seleccionar'] + $entity::remember(60)->get()->lists('nombre', 'id');

    return Form::select($name, $values, $selected, $options);
});