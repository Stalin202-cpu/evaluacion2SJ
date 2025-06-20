<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    //Campos que se van a poner
    //Nombre de la tabla
    protected $table = 'pilotos';


    //Los campos
    protected $fillable = [
        'cedula',
        'nombre',
        'latitud1', 'longitud1',
        'hora1',
        'latitud2', 'longitud2',
        'hora2',
    ];
}
