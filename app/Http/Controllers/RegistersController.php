<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistersController extends Controller
{
    public function registrado(Request $request){
    	$this->validate($request, [
    		'email' => 'required',
    		'age' => 'required',
    		'password' => 'required',
    		'object' => 'required',
    		'friend' => 'required',
    		'name' => 'required'
    	]);
    	$user = new User;
    	$user->email = $request->input('email');
    	$user->age = $request->input('age');
    	$user->password = bcrypt($request->input('password'));
    	$user->object = $request->input('object');
    	$user->friend = $request->input('friend');
    	$user->name = $request->input('name');
    	$user->save();
    	return redirect('register')->with('response', 'Registro Exitoso');
    }
}
