<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class padre extends Model
{
    protected $table = 'padres';

 	protected $fillable = ['nombre', 'apellido', 'telefono', 'direccio'];   

 	public function estudiantes()
 	{
 		return $this->hasMany('App\estudiante');
 	}

 	public function User()
 	{
 		return $this->belongsTo('App\User');
 	}
}
