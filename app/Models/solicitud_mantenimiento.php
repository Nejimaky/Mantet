<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud_mantenimiento extends Model
{
    use HasFactory;
    protected $table = 'solicitud_mantenimiento';
    protected $primaryKey = 'ID_SolicitudM';

    protected $fillable = [
        'Area_solicitante',
        'ProductoMant',
        'Nombre_del_solicitante',
        'Fecha',
        'Nombre_del_ejecutante',
        'Tipo_de_mantenimiento_a_realizar',
        'A_qué_se_le_aplicara_mantenimiento',
        'Servicio_ejecutado_por_personal',
        'Tipo_de_servicio_a_realizar',
        'Reporte_técnico_del_servicio',
        'Medidas_aplicadas',
        ];
    /* por defecto se envian los siguientes campos en eloquoent  updated_at  y created_at*/
    /* esto evita que se envien esos campos */
    public $timestamps = false;
}
