<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function show($id) {
        return 'Entramos en el controlador HomeController y mostramos el parámetro ' . $id ;
    }

    public function mostrarUsuario($param) {
        return view('mostrar-usuario', ['usuario' => $param]);
    }
}
