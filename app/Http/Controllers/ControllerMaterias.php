<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\materia;
use App\Http\Requests\MateriasRequest;

class ControllerMaterias extends Controller
{
    //**
    //
    public function index()
    {
        $materias = materia::orderBy('id', 'ASC')->paginate(5);
        return view('admin.materias.index')->with('materias', $materias);
    }
    //
    //
    public function create()
    {
    	return view('admin.materias.create');
    }

    //
    //
    public function store(MateriasRequest $request)
    {
    	$materias = new materia($request->all());
    	$materias->save();

        flash( "Se he creado la materia ".$materias->nombre." exitosamente" )->success();

        return redirect('admin/materias');    	
    }

    //**
    //
    public function destroy($id)
    {
        $materias = materia::find($id);
        $materias->delete();

        flash( "Se he eliminado la materia".$materias->nombre." exitosamente" )->success();

        return redirect('admin/materias');  
    }
}
