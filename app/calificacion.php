<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
    protected $table = 'calificaciones';

 	protected $fillable = ['nota']; 
}
