<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\materia;
use App\calificacion;
use App\Http\Requests\MateriasRequest;

class ControllerMaterias extends Controller
{
    //**
    //
    public function index(Request $request)
    {
        $materias = materia::search($request->name)->orderBy('id', 'ASC')->paginate(5);
        $materias->each(function($materias)
        {
            $materias->calificacion;
        });
        return view('admin.materias.index')->with('materias', $materias);
    }
    //
    //
    public function create()
    {
        $notas = calificacion::orderBy('id', 'ASC')->pluck('nota', 'id');
    	return view('admin.materias.create')->with('notas', $notas);
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
    public function edit($id)
    {

       $materias = materia::find($id);

       $materias->calificacion;

       $notas = calificacion::orderBy('id', 'ASC')->pluck('nota', 'id');
       return view('admin.materias.edit')->with('notas', $notas);
    }

    //**
    //
     public function update(Request $request, $id)
    {

        $materias = materia::find($id);
        $materias->fill($request->all());
        $materias->save();
        flash( "Los datos se han actualizado exitosamente" )->success();

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
