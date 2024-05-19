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
    <h1>Solicitud de Mantenimiento</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Area solicitante</th>
                <th>Producto</th>
                <th>Nombre Solicitante</th>
                <th>Fecha</th>
                <th>Nombre Ejecutante</th>
                <th>Tipo de mantenimiento</th>
                <th>hardware o software</th>
                <th>Personal interno o externo</th>
                <th>Que servicio se realiza</th>
                <th>Reporte técnico del servicio</th>
                <th>Medidas aplicadas</th>
                <!-- <th>Imagenes</th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data->ID_SolicitudM }}</td>
                <td>{{ $data->Area_solicitante }}</td>
                <td>{{ $data->ProductoMant }}</td>
                <td>{{ $data->Nombre_del_solicitante }}</td>
                <td>{{ $data->Fecha }}</td>
                <td>{{ $data->Nombre_del_ejecutante }}</td>
                <td>{{ $data->Tipo_de_mantenimiento_a_realizar }}</td>
                <td>{{ $data->A_qué_se_le_aplicara_mantenimiento }}</td>
                <td>{{ $data->Servicio_ejecutado_por_personal }}</td>
                <td>{{ $data->Tipo_de_servicio_a_realizar }}</td>
                <td>{{ $data->Reporte_técnico_del_servicio }}</td>
                <td>{{ $data->Medidas_aplicadas }}</td>
                <!-- <td>{{$data->Imagenes}}</td> -->
            </tr>
        </tbody>
    </table>
</body>
</html>