<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\solicitud_mantenimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/getpdf/preventivo/{ids}', [Controller::class, 'getpdfPreventivo'])->name('getpdfp');
class PDFController extends Controller
{
    public function getpdfPreventivo($ids)
    {
        $ids = explode(',', $ids);
        $data = solicitud_mantenimiento::whereIn('ID_SolicitudM', $ids)
                                      ->where('Tipo_de_mantenimiento_a_realizar', 'Preventivo')
                                      ->get();

        if ($data->isEmpty()) {
            return response('No hay registros de mantenimientos preventivos', 404);
        }

        $dompdf = new Dompdf();
        $html = view('pdf', ['data' => $data])->render();

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        return $dompdf->stream();
    }

    public function getpdfCorrectivo($ids)
    {
        $ids = explode(',', $ids);
        $data = solicitud_mantenimiento::whereIn('ID_SolicitudM', $ids)
                                      ->where('Tipo_de_mantenimiento_a_realizar', 'Correctivo')
                                      ->get();

        if ($data->isEmpty()) {
            return response('No hay registros de mantenimientos correctivos', 404);
        }

        $dompdf = new Dompdf();
        $html = view('pdf', ['data' => $data])->render();

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        return $dompdf->stream('SolicitudMantenimiento_Correctivo.pdf', ['Attachment' => false]);
    }
}