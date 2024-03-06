<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
        
    } 
    public function cs()
    {
        
        session_start();
        unset($_SESSION['usuario']);
        return redirect('');
    } 
    public function log(request $datos){
        $user = users::where(strtoupper('nombre_usuario'), '=', strtoupper($datos->nombre_usuario))->where('contraseña', '=', $datos->contraseña)->first();
        if(!isset($user->id)){
            return redirect('login');
        } else {
            session_start();
            $datoss = strtoupper($datos->nombre_usuario[0]).''.strtolower(substr($datos->nombre_usuario, 1));
            $_SESSION['usuario'] = $datoss;
            setcookie('nombre_usuario', $user->nombre_usuario, 100*24*3600);
            return redirect('');
        }
    }
}
