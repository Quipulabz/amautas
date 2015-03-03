<?php

class Empleo extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empleo';

    protected $softDelete = true;

    /**
     * Empleo pertenece a User
     *
     */
    public function user()
    {
        return $this->belongsTo('User');
    }

    /**
     * Empleo tiene una Especialidad
     *
     * @return Especialidad
     */
    public function especialidad()
    {
        return $this->belongsTo('Especialidad');
    }

    /**
     * Empleo pertenece a un Departamento
     *
     * @return Departamento
     */
    public function departamento()
    {
        return $this->belongsTo('Departamento');
    }

    /**
     * Empleo pertenece una Modalidad
     *
     * @return Modalidad
     */
    public function modalidad()
    {
        return $this->belongsTo('Modalidad');
    }

    /**
     * Convierte el titulo del Empleo en un Slug
     */
    public static function boot()
    {
        parent::boot();

        static::saving(function($empleo) {
            $empleo->slug = Str::slug($empleo->titulo);
        });
    }
}
