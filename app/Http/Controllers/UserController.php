<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function InicioSesion()
    {
        return view('inicioRegis');
    }
    public function InicioSesionV()
    {
        return view('inicioRegisV');
    }
    public function VistaUno()
    {
        return view('plantilla');
    }
    public function VistaVendedores()
    {
        return view('vendedores');
    }
    public function Inicio()
    {
        return view('PaginaInicio');
    }
}
