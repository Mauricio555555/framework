<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ControllerUsers extends Controller
{
	//**
	//
	public function index()
	{
		$users = User::orderBy('id', 'ASC')->paginate(5);
		return view('admin.users.index')->with('users', $users);
	}

    //**
    //
    public function create()
    {
    	return view('admin.users.create');
    }

    //**
	//
    public function store(Request $request)
    {
    	$users = new User($request->all());
    	$users->password = bcrypt($request->password);
    	$users->save();

        flash( "Se he creado el usuario ".$users->name." exitosamente" )->success();

        return redirect('admin/users');    	
    }

    //**
    //
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        flash( "Se he eliminado el usuario ".$users->name." exitosamente" )->success();

        return redirect('admin/users');  
    }

    //**
    //
    public function edit($id)
    {
       $users = User::find($id);
       return view('admin.users.edit')->with('users', $users);  
    }

    //**
    //
     public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->type = $request->type;
        $users->save();

        flash( "Los datos se han actualizado exitosamente" )->success();

        return redirect('admin/users');
    }
}
