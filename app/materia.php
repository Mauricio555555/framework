<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    protected $table = 'materias';

 	protected $fillable = ['nombre', 'calificacion'];   

 	public function docente()
 	{
 		return $this->belongsTo('App\docente');
 	}

 	public function calificacion()
 	{
 		return $this->hasOne('App\calificacion');
 	}
 }
