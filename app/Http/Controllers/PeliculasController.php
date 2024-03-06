<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Peliculas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeliculasController extends Controller
{

    public function index()
    {
        session_start();
        $peliculas = Peliculas::simplePaginate(6);
        $users = User::all();

        return view('inicio', compact('peliculas', 'users'));
    }

    public function terror()
    {
        session_start();
        $peliculas = Peliculas::where('genero', 'Terror')->simplePaginate(6);
        $users = User::all();

        return view('inicio', compact('peliculas', 'users'));
    }

    public function show($cod_pelicula)
    {
        $pelicula = Peliculas::where('cod_pelicula', $cod_pelicula)->first();
        return view('show', compact('pelicula'));
    }

    public function destroy($cod_pelicula)
    {
        $pelicula = Peliculas::where('cod_pelicula', $cod_pelicula)->first();

        if ($pelicula) {
            $pelicula->delete();
            return redirect()->route('inicio')->with('success', 'La película ha sido eliminada exitosamente.');
        } else {
            return redirect()->route('inicio')->with('error', 'La película que intentas eliminar no existe.');
        }
    }


    public function create()
    {
        $generos = DB::table('peliculas')->select('genero')->distinct()->pluck('genero');
        $users = User::all();
        return view('crear_pelicula', ['generos' => $generos, 'users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'genero' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'user_id' => 'required'
        ]);

        $pelicula = new Peliculas();
        $pelicula->titulo = $request->titulo;
        $pelicula->genero = $request->genero;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->imagen = $request->imagen;
        $pelicula->user_id = $request->user_id;
        $pelicula->save();

        return redirect()->route('inicio')->with('success', 'Película creada exitosamente');
    }
}
