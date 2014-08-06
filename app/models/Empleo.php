<?php

// use Quipulabz\Helper\Slugify;

class Empleo extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empleo';

    /**
     * Estos atributos no se pueden modificar desde el form.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $softDelete = true;

    /**
     * Empleo pertenece a User
     *
     * @var User
     */
    public function user()
    {
        return $this->belongsTo('User');
    }

    /**
     * Empleo tiene una Especialidad
     *
     * @var User
     */
    public function especialidad()
    {
        return $this->belongsTo('Especialidad');
    }

    /**
     * Empleo pertenece a un Departamento
     *
     * @var User
     */
    public function departamento()
    {
        return $this->belongsTo('Departamento');
    }


    public static function boot()
    {
        parent::boot();

        static::saving(function($empleo) {
            $empleo->slug = Str::slug($empleo->titulo);
        });

    }
}
