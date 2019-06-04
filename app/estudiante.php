<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $table = 'estudiantes';

 	protected $fillable = ['nombre', 'apellido', 'telefono', 'padres', 'No_salon', 'No_seguro', 'No_grado', 'id_docente', 'materia_id'];   


 	public function padre()
 	{
 		return $this->belongsTo('App\padre');
 	}
 	public function salon()
 	{
 		return $this->belongsTo('App\salon');
 	}
 	public function User()
 	{
 		return $this->belongsTo('App\User');
 	}
 	public function materia()
    {
        return $this->morphToMany('App\materia');
    }
}

