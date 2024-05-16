{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Welcome')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de inicio')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content')
<div class="col py-3">
    <h1>Solicitudes Creadas</h1>
    <p class="lead">
        Aqui verás todas las solicitudes que has creado.
    </p>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Area solicitante</th>
                        <th>Nombre del solicitante</th>
                        <th>Fecha</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->ID_SolicitudM}}</td>
                        <td>{{ $row->Area_solicitante}}</td>
                        <td>{{ $row->Nombre_del_solicitante}}</td>
                        <td>{{ $row->Fecha}}</td>
                        <td>
                            <form action="{{ route('getpdf', $row->ID_SolicitudM) }}" method="get">
                                <button type="submit" class="btn btn-primary btn-sm">Get Pdf</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
</div>
<!-- @dump($data) -->
@endsection