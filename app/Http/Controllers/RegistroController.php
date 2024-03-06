<?php

namespace App\Http\Controllers;
use App\Models\users;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function create()
    {
        return view('registro');
       
    } 
    public function store(){
        $user = users::create(request(['nombre_usuario', 'name', "fecha_nac", 'direccion', 'telefono','contraseña']));
        auth()->login($user);
        return redirect()->to('/');
    
    }
}
