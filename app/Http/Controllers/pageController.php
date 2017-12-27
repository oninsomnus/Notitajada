<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function __construct(){
        $this->middleware(
            'authorization',
            ['only'=>['noticia']]
        );
    }

    public function inicio()
    {
		 return view('home');
    }

    public function register()
    {
    	return view('register');
    }

    public function login()
    {
    	return view('login');
    }

    public function noticia()
    {
    	return view('noticia');
    }
}
