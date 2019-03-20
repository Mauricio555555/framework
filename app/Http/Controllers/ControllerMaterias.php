<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materia;

class ControllerMaterias extends Controller
{
    //
    //
    public function create()
    {
    	return view('admin.materias.create');
    }

    //
    //
    public function store(Request $request)
    {
    	$materias = new materia($request->all());
    	$materias->save();

        flash( "Se he creado la materia ".$materias->nombre." exitosamente" )->success();

        return redirect('/');    	
    }
}
