<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\docente;
use App\materia;
use App\User;
use App\estudiante;
use App\Http\Requests\DocenteRequest;
use App\Http\Requests\MateriasRequest;

class ControllerDocente extends Controller
{
    public function index()
	{
		$docentes = docente::orderBy('id', 'ASC')->paginate(5)->all();
        foreach($docentes as $docente){
            $nombre = User::find($docente->user_id);
            $docente->user_id =   $nombre->name;
        }

		return view('admin.asignar.docente.index')->with('docentes', $docentes);
	}

    public function inicio()
    {
        $docentes = docente::orderBy('id', 'ASC')->paginate(5);        
        $estudiantes = estudiante::orderBy('id', 'ASC')->paginate(5); 
        $materias = materia::orderBy('id', 'ASC')->paginate(5); 
        foreach($docentes as $docente){
            $nombre = User::find($docente->user_id);
            $docente->user_id =   $nombre->name;  
        }
        return view('admin.asignar.docente.inicio')->with('docentes', $docentes)
        ->with('estudiantes', $estudiantes)->with('materias', $materias);
    }

    public function menu()
    {
        $docentes = docente::orderBy('id', 'ASC')->paginate(5);
        foreach($docentes as $docente){
            $nombre = User::find($docente->user_id);
            $docente->user_id =   $nombre->name;
        }
        return view('admin.asignar.docente.menu')->with('docentes', $docentes);
    }

	//
    //
    public function create()
    {
        $materias = materia::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $users = User::orderBy('id', 'ASC')->pluck('name', 'id');    
        
    	return view('admin.asignar.docente.create')->with('materias', $materias)->with('users', $users);
    }

    //
    //
    public function store(DocenteRequest $request)
    {
    	$docentes = new docente($request->all());
    	$docentes->save();

        flash( "Se a asignado una materia a ".$docentes->nombre." ".$docentes->apellido." exitosamente" )->success();

        return redirect('admin/docente');    	
    }

    //**
    //
    public function destroy($id)
    {
        $docentes = docente::find($id);
        $docentes->delete();

        flash( "Se ha eliminado al dosente asignado ".$docentes->nombre." ".$docentes->apellido. " exitosamente" )->success();

        return redirect('admin/docente');  
    }
}
