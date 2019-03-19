<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    	
    }
}
