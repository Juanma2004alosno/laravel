<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peliculas as ModelsPeliculas;

class GeneroController extends Controller
{
    public function index($nombre_genero){    
        
        session_start();
        $genero = ModelsPeliculas::where('genero','=',$nombre_genero)->simplePaginate(8);
        return view('genero', compact('genero', 'nombre_genero'));
    }
}
