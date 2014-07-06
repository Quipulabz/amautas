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


    public static function boot()
    {
    	parent::boot();

    	static::saving(function($empleo) {
            $empleo->slug = Str::slug($empleo->titulo);
        });

    }
}
