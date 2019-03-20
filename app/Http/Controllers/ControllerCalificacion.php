<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calificacion;

class ControllerCalificacion extends Controller
{
    //
    //
    public function create()
    {
    	return view('admin.notas.create');
    }

       //**
	//
    public function store(Request $request)
    {
    	$notas = new calificacion($request->all());
    	$notas->save();

        flash( "La calificacion se he agregado" )->success();

        return redirect('/');    	
    }
}
