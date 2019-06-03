<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\materia;
use App\calificacion;
use App\User;
use App\docente;

class ControllerAsignarEstudiante extends Controller
{
    //
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('admin.asignar.index2')->with('users', $users);
    }

}
