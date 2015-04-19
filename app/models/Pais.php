<?php

class Pais extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pais';

	protected $softDelete = true;

	/**
	 * Pais tiene muchos User
	 *
	 * @return User
	 */
	public function user()
	{
		return $this->hasMany('User');
	}

	/**
	 * Pais tiene muchos Departamento
	 *
	 * @return Departamento
	 */
	public function departamento()
	{
		return $this->hasMany('Departamento');
	}
}