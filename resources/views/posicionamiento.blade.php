@extends('layouts.header')


@section('content')
<div class="container">
    <h1 class="mt-4">Posicionamiento</h1>
    <div class="subtitulo mb-4">
        Existen tres maneras principales de posicionamiento de los widgets dentro de la ventana. <br>
        <i><b> GRID - PACK - PLACE</b></i>
    </div>

    <h2>grid</h2>
    <div class="subtitulo">
        Este sistema se basa en filas y columnas
    </div>
<hr>
    <h2>pack</h2>
        <div class="subtitulo">
            Este sistema se basa en ordenar los widgets en el menor espacio posible con posicionamiento automático.
        </div>
    <hr>
    <h2>place</h2>
    <div class="subtitulo">
        Este sistema se basa en posicionamiento fijo por coordenadas de pixeles relativos al widget padre.
    </div>








</div> {{-- container --}}
    
@endsection