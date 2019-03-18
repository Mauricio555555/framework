<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $table = 'estudiantes';

 	protected $fillable = ['nombre', 'apellido', 'telefono', 'padres', 'No_salon', 'No_seguro', 'No_grado'];   
}

