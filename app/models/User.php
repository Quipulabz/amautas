<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{

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
    protected $hidden = ['password'];

    protected $softDelete = true;

    protected $remember_token;

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
     * @return string
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

    /**
     * Usuario pertenece a un Pais
     *
     * @return Pais
     */
    public function pais()
    {
        return $this->belongsTo('Pais');
    }

    /**
     * Usuario pertenece a un Departamento
     *
     * @return Departamento
     */
    public function departamento()
    {
        return $this->belongsTo('Departamento');
    }

    /**
     * Usuario tiene una Especialidad
     *
     * @return Especialidad
     */
    public function especialidad()
    {
        return $this->belongsTo('Especialidad');
    }

}
