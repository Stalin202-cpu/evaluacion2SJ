<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuelosContoller extends Controller
{
    public function index()
    {
        $predios = Predio::all();
        return view('predios.nuevo', compact('predios'));
    }
}
