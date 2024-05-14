{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Welcome')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de inicio')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content') 
<div class="col py-3">
    <h1>Productos creados</h1>
        @if (session('status'))
            <div class="text-center">
                <h1 style="margin-top: 4rem" class="text-success">{{ session('status') }}</h1>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->Nombre}}</td>
                        <td>{{ $row->Cantidad}}</td>
                        <td>
                            <form action="{{ route('getproduct', $row->ID_Producto) }}" method="post">
                                @csrf
                                <button class="btn btn-warning">Editar</button>
                            </form>
                            <form action="{{ route('deleteProduct', $row->ID_Producto) }}" method="post">
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                
                @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection