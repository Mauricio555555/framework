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
    public function estudiante()
    {
        return $this->morphedByMany('App\estudiante');
    }

 	public function scopeSearch($query, $nombre)
	{
		return $query->where('nombre', 'LIKE', "%$nombre%");
	}
 }
