<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salon extends Model
{
    protected $table = 'salones';

 	protected $fillable = ['numero'];   

 	public function estudiantes()
 	{
 		return $this->hasMany('App\estudiante');
 	}
}
