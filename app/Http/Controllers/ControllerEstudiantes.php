<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\estudiante;
use App\materia;
use App\salon;
use App\padre;
use App\User;

use App\Http\Requests\EstudiantesRequest;

class ControllerEstudiantes extends Controller
{
    public function index()
	{
		$estudiantes = estudiante::all();
        $materias = materia::orderBy('id', 'ASC')->paginate(5); 
		foreach($estudiantes as $estudiante){
            $nombre = materia::find($estudiante->materia_id);
            $nom = salon::find($estudiante->No_salon);
            $pad = padre::find($estudiante->padres);
            $estudiante->materia_id =  	$nombre->nombre;
        }
        return view('admin.asignar.estudiantes.index')
        ->with('estudiantes', $estudiantes)->with('materias', $materias);		
	}

    //
    //
    public function create()
    {
        $estudiantes = materia::orderBy('id', 'ASC')->pluck('nombre', 'id');
        $users = User::orderBy('id', 'ASC')->pluck('name', 'id');    
        
        return view('admin.asignar.estudiantes.create')->with('estudiantes', $estudiantes)->with('users', $users);
    }

    //
    //
    public function store(EstudiantesRequest $request)
    {
        $estudiantes = new estudiante($request->all());

        $estudiantes->save();

        flash( "Se a asignado una materia a ".$estudiantes->nombre." ".$estudiantes->apellido." exitosamente" )->success();

        return redirect('admin/estudiantes');       
    }

    //
    //
    public function edit($id)
    {

       $estudiantes = estudiante::find($id);

       $estudiantes = estudiante::orderBy('id', 'ASC');
       return view('admin.estudiantes.edit')->with('estudiantes', $estudiantes);
    }

    //
    //
    public function update(Request $request, $id)
    {

        $estudiantes = estudiante::find($id);
        $estudiantes->fill($request->all());
        $estudiantes->save();
        flash( "Los datos se han actualizado exitosamente" )->success();

        return redirect('admin/estudiantes');
    }
}
