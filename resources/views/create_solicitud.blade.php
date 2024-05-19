{{-- plantillas --}}
@extends('layouts.app')

{{-- asigna el titulo de la pagina --}}
@section('title','Welcome')

{{-- crea una descripcion para la pagina --}}
@section('meta-description','Pagina de inicio')

{{--  es para que el contenido se muestre dentro de la plantilla, recibe el nombre de @yield() de app.blade.php --}}
@section('content') 

<!-- @dump($productos) -->
<div class="col py-3">
    <h1 class="text-center">Crea una nueva solicitud de mantenimiento</h1>
    <!-- <p class="lead">Rellena todos los campos del formulario.</p> -->
    <div class="container">
            @if (session('status'))
                <div class="text-center">
                    <h1 style="margin-top: 4rem" class="text-success">{{ session('status') }}</h1>
                </div>
            @endif
        <form method="post" action="{{ route('adddata') }}" class="row g-3">
        @csrf
        <div class="col-4">
                <label for="text">Área solicitante</label>
                <select class="form-select" id="tipomant" name="Area_solicitante">
                    <option selected>Selecciona una opción</option>
                    <option value="Adimistrativo">Adimistrativo</option>
                    <option value="Recursos Humanos">Recursos Humanos</option>
                    <option value="Comunicación y difusión">Comunicación y difusión</option>
                    <option value="Recursos Materiales">Recursos Materiales</option>
                    <option value="Sindicato de Maestros">Sindicato de Maestros</option>
                    <option value="Departamento de Computo">Departamento de Computo</option>
                    <option value="DEPI">DEPI</option>
                </select>
            </div>
            <div class="col-3">
                <label for="">Equipo</label>
                <select class="form-select" id="ProductoMant" name="ProductoMant">
                    <option selected>Selecciona una opción</option>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->Nombre }}">{{ $producto->Nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-5">
                <label for="Nombre_del_solicitante">Nombre del solicitante</label>
                <input type="text" class="form-control" id="areaname" name="Nombre_del_solicitante" placeholder="Escribe el nombre completo">
            </div>
            <div class="col-3">
                <label for="nombre">Fecha</label>
                <input type="date" class="form-control" id="date" name="Fecha">
            </div>
            <div class="col-4">
                <label for="Nombre_del_ejecutante">Nombre del ejecutante</label>
                <input type="text" class="form-control" id="areaname" name="Nombre_del_ejecutante" placeholder="Escribe el nombre completo">
            </div>
            <div class="col-4">
                <label for="Tipo_de_mantenimiento_a_realizar">Tipo de mantenimiento a realizar</label>
                <select class="form-select" id="tipomant" name="Tipo_de_mantenimiento_a_realizar">
                    <option selected>Selecciona una opción</option>
                    <option value="Preventivo">Preventivo</option>
                    <option value="Correctivo">Correctivo</option>
                </select>
            </div>
            <div class="col-4">
                <label for="text">¿A qué se le aplicara mantenimiento?</label>
                <select class="form-select" id="que_aplicar_mantenimiento" name="A_qué_se_le_aplicara_mantenimiento">
                    <option selected="">Selecciona una opción</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                </select>
            </div>
            <div class="col-4">
                <label for="text">Servicio ejecutado por personal</label>
                <select class="form-select" id="tipo_personal" name="Servicio_ejecutado_por_personal">
                    <option selected="">Selecciona una opción</option>
                    <option value="Interno">Interno</option>
                    <option value="Externo">Externo</option>
                </select>
            </div>
            <div class="col-4">
                <label for="">Tipo de servicio a realizar</label>
                <select class="form-select" id="tipo_serv" name="Tipo_de_servicio_a_realizar">
                    <option selected>Selecciona una opción</option>
                    <option value="Reparación y configuración de cualquier componente">Reparación y configuración de cualquier componente</option>
                    <option value="Optimización de rendimiento">Optimización de rendimiento</option>
                    <option value="Eliminación de virus">Eliminación de virus</option>
                    <option value="Errores de pantalla azul">Errores de pantalla azul</option>
                    <option value="Reparación de periféricos">Reparación de periféricos</option>
                </select>
            </div>
            <div class="col-4">
                <label for="">Reporte técnico del servicio</label>
                <select class="form-select" id="Re_tec_servicio" name="Reporte_técnico_del_servicio">
                    <option selected>Selecciona una opción</option>
                    <option value="Envejecimiento">Envejecimiento</option>
                    <option value="Desgaste">Desgaste</option>
                    <option value="Mala instalación">Mala instalación</option>
                    <option value="El uso">El uso</option>
                </select>
            </div>
            <div class="col-4">
                <label for="">Medidas aplicadas</label>
                <select class="form-select" id="med_aplicadas" name="Medidas_aplicadas">
                    <option selected>Selecciona una opción</option>
                    <option value="Rutina de mantenimiento">Rutina de mantenimiento</option>
                    <option value="Reparación">Reparación</option>
                    <option value="Verificación">Verificación</option>
                </select>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Enviar Solicitud</button>
            </div>
        </form>
    </div>
</div>
@endsection