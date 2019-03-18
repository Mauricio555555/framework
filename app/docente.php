<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    protected $table = 'docentes';

 	protected $fillable = ['nombre', 'apellido', 'No_seguro', 'telefono', 'materia'];  
}
