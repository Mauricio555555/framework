<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function usuario()
    {
        return $this->type === 'admin';
    }

    public function teacher()
    {
        return $this->type === 'teachers';
    }

    public function students()
    {
        return $this->type === 'students';
    }

    public function id()
    {
        return $this->id;
    }




    /////////////////////////////////////////////////

    public function egresado()
    {
        return $this->hasOne('App\egresado');
    }

    public function estudiante()
    {
        return $this->hasOne('App\estudiante');
    }
     public function padre()
    {
        return $this->hasOne('App\padre');
    }
     public function docente()
    {
        return $this->hasOne('App\docente');
    }
}
