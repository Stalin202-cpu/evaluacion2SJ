<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuelosContoller extends Controller
{
    public function index()
    {
        //Consulta de Clientes en la BDD
        $vuelos=Vuelos::all();
        //Renderizar la vista y pasar datos
        return view('vuelos.index',compact('vuelos'));
    }
}
