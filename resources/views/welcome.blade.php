{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Welcome')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de inicio')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content') 
    <div class="col py-3">
        <h1>Bienvenido a ManteniTec</h1>
        <p class="lead">
            Simplificamos el seguimiento y mantenimiento de tus equipos informáticos.
        </p>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/img/Mantenimiento_P.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Crea una nueva solicitud de mantenimiento</h5>
                        <p class="card-text">Simplifica la gestión de tus equipos informáticos y optimiza tu rendimiento.</p>
                        <a href="{{ route('addSolicitud') }}" class="btn btn-primary">Crea tu solicitud</a>
                    </div>
                </div>
            </div>

            <!-- <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/img/Almacen.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Agrega un nuevo producto al almacen</h5>
                        <p class="card-text">¡Innova tu Almacén! Añade un Toque de Eficiencia: Agrega un Nuevo Producto Ahora.</p>
                        <a href="nuevo_producto.php" class="btn btn-primary">Agrega un nuevo producto</a>
                    </div>
                </div>
            </div> -->

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="/img/Reportes.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ve las solicitudes que ya creaste</h5>
                        <p class="card-text">¡Toma el Control! Observa tus Solicitudes Anteriores y Sigue Avanzando.</p>
                        <a href="{{ route('solicitudCreada') }}" class="btn btn-primary">Ver solicitudes</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection