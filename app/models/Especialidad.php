<?php

class Especialidad extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'especialidad';

    /**
     * Estos atributos no se pueden modificar desde el form.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $softDelete = true;

    /**
     * Especialidad tiene muchos Empleos
     *
     * @var Empleo
     */
    public function empleo()
    {
        return $this->hasMany('Empleo');
    }

}