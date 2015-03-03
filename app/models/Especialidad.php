<?php

class Especialidad extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'especialidad';

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