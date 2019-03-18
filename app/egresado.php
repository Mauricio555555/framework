<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class egresado extends Model
{
    protected $table = 'egresados';

 	protected $fillable = ['nombre', 'apellido','fecha_grado', 'No_diploma', 'No_acta'];  

 	public function User()
 	{
 		return $this->belongsTo('App\User');
 	}
}
