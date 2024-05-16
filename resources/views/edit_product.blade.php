{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Welcome')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de inicio')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content') 
    <div class="col py-3">
        <h1>Agrega un nuevo producto al almacen</h1>
        <p class="lead">Agrega un nuevo producto al almacen</p>
        <div class="row">
            <div class="col-md-6">
                @if (session('status'))
                    <div class="text-center">
                        <h1 style="margin-top: 4rem" class="text-success">{{ session('status') }}</h1>
                    </div>
                @endif
                <!-- @dump($data->Nombre) -->
                <form action="{{ route('UpdateProduct') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ID_Producto" value="{{ $data->ID_Producto }}">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre" name="Nombre" value="{{ $data->Nombre }}">
                    </div>
                    <div class="col-5">
                        <label for="text">Tipo de Equipo</label>
                        <select class="form-select" id="EquipoMant" name="EquipoMant" value="{{ $data->EquipoMant }}">
                            <option selected>Selecciona una opción</option>
                            <option value="Computadora">Computadora</option>
                            <option value="Impresora">Impresora</option>
                            <option value="Proyector">Proyector</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="Marca" name="marca" value="{{ $data->Marca }}">
                    </div>
                    <div class="mb-3">
                        <label for="Modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="Modelo" name="modelo" value="{{ $data->Modelo }}">
                    </div>
                    <div class="mb-3">
                        <label for="Cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="Cantidad" value="{{ $data->Cantidad }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar producto</button>
                </form>
            </div>
        </div>
    </div>
@endsection