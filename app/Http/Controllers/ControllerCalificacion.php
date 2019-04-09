<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calificacion;
use App\materia;

class ControllerCalificacion extends Controller
{
    //
    //
    public function create($id)
    {
        $notas = materia::find($id);
    	return view('admin.notas.create')->with('notas', $notas);
    }

       //**
	//
    public function store(Request $request, $id)
    {
        $notas = materia::find($id);
    	$notas = new calificacion($request->all()); 
        redirect('admin/notas/create');   
    	$notas->save();

        flash( "La calificacion se he agregado" )->success();
   	
    }
}
