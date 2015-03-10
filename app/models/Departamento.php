<?php

class Departamento extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departamento';

    protected $softDelete = true;

    /**
     * Departamento pertenece a un Pais
     *
     * @return Pais
     */
    public function pais()
    {
        return $this->belongsTo('Pais');
    }

    /**
     * Departamento tiene muchos Empleos
     *
     * @var Empleo
     */
    public function empleo()
    {
        return $this->hasMany('Empleo');
    }

    /**
     * Departamento tiene muchos User
     *
     * @var User
     */
    public function user()
    {
        return $this->hasMany('User');
    }
}