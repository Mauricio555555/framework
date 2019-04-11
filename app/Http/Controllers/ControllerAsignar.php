<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\materia;
use App\calificacion;
use App\User;

use App\Http\Requests\MateriasRequest;

class ControllerAsignar extends Controller
{
 /**   
	public function index(Request $request)
    {
        $materias = materia::search($request->name)->orderBy('id', 'ASC')->paginate(5);
        $materias->each(function($materias)
        {
            $materias->calificacion;
        });
        return view('admin.asignar.index')->with('materias', $materias);
    }
     */

    public function index()
	{
		$users = User::orderBy('id', 'ASC')->paginate(5);
		return view('admin.asignar.index')->with('users', $users);
	}
}
