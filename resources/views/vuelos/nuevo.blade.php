@extends('layout.app')
@section('contenido')

<div  class='row'>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="{{ route('predios.store') }}" method="POST" class="border p-4 rounded shadow bg-light"></form>
        @csrf
        <h3 class="text-center text-primary"><b>Registrar Nuevo Vuelo</b></h3>
        <hr>
        <label for=""><b>DNI O CEDULA:</b> </label> <br>
        <input type="text" name="cedula" id="cedula"
            id="cedula" placeholder="Ingrese la cedula del piloto"
             required class="form-control mb-3" value="{{ old('cedula') }}"> 

        <label for=""><b>Nombre del Piloto:</b></label>        
        <input type="text" name="nombre" id="nombre"
        placeholder="Ingrese la clave catastral"
        class="form-control mb-4" value="{{ old('nombre') }}"> 

        <!-- Coordenada 1 -->
        <div class="row mb-4">
            <div class="col-md-5">
                <label><b> In grese la COORDENADA N° 1</b></label> <br>
                <label><b>Latitud:</b></label><br>
                <input type="number" step="any" name="latitud1" id="latitud1"
                class="form-control mb-2" readonly placeholder="Seleccione ..." required value="{{ old('latitud1') }}">
                <label><b>Longitud:</b></label><br>
                <input type="number" step="any" name="longitud1" id="longitud1"
                class="form-control" readonly placeholder="Seleccione ..." required value="{{ old('longitud1') }}">
            </div>
            <div class="col-md-7">
                <div id="mapa1" class="border rounded" style="height:180px; width:100%;"></div>
            </div>
        </div>
        <hr>
        <label for=""><b>Ingrese la hora Inicio dle:</b> </label> <br>
        <input type="time" name="hora1" id="hora1"
            id="hora1" placeholder="Ingrese la cedula del piloto"
             required class="form-control mb-3" value="{{ old('cedula') }}"> 



    </div>

</div>

@endsection