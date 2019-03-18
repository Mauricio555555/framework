<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    protected $table = 'docentes';

 	protected $fillable = ['nombre', 'apellido', 'No_seguro', 'telefono', 'materia'];  

 	public function materia()
 	{
 		return $this->hasOne('App\materia');
 	}

 	public function User()
 	{
 		return $this->belongsTo('App\User');
 	}
}
