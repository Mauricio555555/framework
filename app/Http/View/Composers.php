<?php

namespace App\Http\View;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\materia;

/**
 *  
 */
class Composers 
{
	public function compose(View $view)
	{
		$materias = materia::all();
		$view->with('materias', $materias);
	}

	function __construct(argument)
	{
		# code...
	}
}