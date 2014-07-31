<?php

class Departamento extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departamento';

    /**
     * Estos atributos no se pueden modificar desde el form.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $softDelete = true;

    /**
     * Departamento tiene muchos Empleos
     *
     * @var Empleo
     */
    public function empleo()
    {
        return $this->hasMany('Empleo');
    }
}