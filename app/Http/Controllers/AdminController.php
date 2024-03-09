<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class AdminController extends Controller
{
    public function AdminV()
    {
        return view('adminVendedores');
        
    }

    public function show_alumnos(){
       $vendedores = Vendedor::all();
        return view('adminVendedores', compact('vendedores'));
    }
}