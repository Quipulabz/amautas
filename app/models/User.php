<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden 	= ['password'];

	protected $guarded 	= ['id', 'estado'];

	protected $softDelete = true;

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * The Remember Token
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	/**
	 * The Remember Token
	 *
	 * @var string
	 */
	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	/**
	 * The Remember Token
	 *
	 * @var string
	 */
	public function getRememberTokenName()
	{
	    return 'remember_token';
	}


	/**
	 * Usuario tiene muchos Empleos
	 *
	 * @var Empleo
	 */
	public function empleo()
    {
        return $this->hasMany('Empleo');
    }

}
