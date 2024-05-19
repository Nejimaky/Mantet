<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        table, th, td {
            border: 1px solid black;
        }
        
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Solicitudes de Mantenimiento</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Área solicitante</th>
                <th>Producto</th>
                <th>Nombre Solicitante</th>
                <th>Fecha</th>
                <th>Nombre Ejecutante</th>
                <th>Tipo de mantenimiento</th>
                <th>A qué se le aplicará mant</th>
                <th>Personal interno o externo</th>
                <th>Tipo de servicio a realizar</th>
                <th>Reporte técnico del servicio</th>
                <th>Medidas aplicadas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->ID_SolicitudM }}</td>
                    <td>{{ $row->Area_solicitante }}</td>
                    <td>{{ $row->productoMant }}</td>
                    <td>{{ $row->Nombre_solicitante }}</td>
                    <td>{{ $row->Fecha }}</td>
                    <td>{{ $row->Nombre_ejecutante }}</td>
                    <td>{{ $row->Tipo_de_mantenimiento_a_realizar }}</td>
                    <td>{{ $row->Aplicacion_mant }}</td>
                    <td>{{ $row->Personal_interno_externo }}</td>
                    <td>{{ $row->Tipo_servicio }}</td>
                    <td>{{ $row->Reporte_tecnico }}</td>
                    <td>{{ $row->Medidas_aplicadas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>