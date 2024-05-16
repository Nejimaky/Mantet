{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Welcome')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de inicio')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content') 
    <div class="col py-3">
        <h1>Dashboard</h1>
        <p class="lead">
        Mantén tus equipos en forma con facilidad.
        </p>
        <!-- @dump($datos) -->
        @php  $valor = count($datos) @endphp
        <div class="row">
            <div class="col">
                <div class="card bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header"><h4>Mant. programados</h4></div>
                    <div class="card-body">
                        <p class="card-text"> {{ $valor }}</p>
                    </div>
                </div>
            </div>
            @php
    // Suponiendo que $datos contiene los registros recuperados de tu base de datos
    $preventivos = $datos->where('Tipo_de_mantenimiento_a_realizar', 'Preventivo');
    $correctivos = $datos->where('Tipo_de_mantenimiento_a_realizar', 'Correctivo');

    $preventivo = count($preventivos);
    $correctivo = count($correctivos);
@endphp

<div class="col">
    <div class="card bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header"><h4>Mant. Preventivo</h4></div>
        <div class="card-body">
            <p class="card-text">{{ $preventivo }}</p>
        </div>
    </div>
</div>

<div class="col">
    <div class="card bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header"><h4>Mant. Correctivo</h4></div>
        <div class="card-body">
            <p class="card-text">{{ $correctivo }}</p>
        </div>
    </div>
</div>
        </div>
    </div>
@endsection



