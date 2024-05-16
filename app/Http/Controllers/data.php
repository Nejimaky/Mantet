<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\solicitud_mantenimiento;
use App\Models\usuario;
use Dompdf\Dompdf;

class data extends Controller
{
    public function index(){
        $a_data = solicitud_mantenimiento::all();
        return view('/solicitudes_creadas', ['data' =>  $a_data]);
    }

    public function create2(Request $request){
        $a_data = $request->except('_token');
        try {
            solicitud_mantenimiento::create($a_data);
            session()->flash('status', 'Elemento creado');
            return redirect()->route('addSolicitud');
        } catch (\Throwable $th) {
            $holis = solicitud_mantenimiento::create($a_data);
            return $holis;
            session()->flash('status', 'Error al crear');
        }
    }

    public function createProduct (Request $request) {
        $a_data = $request->except('_token');
        try {
            producto::create($a_data);
            session()->flash('status', 'Producto creado');
            return redirect()->route('NewProduct');
        } catch (\Throwable $th) {
            $msg = producto::create($a_data);
            session()->flash('status', 'Error al crear el producto'. $msg);
        }
    }

    public function getProduct(){
        $a_data = producto::all();
        return view('/get_product', ['data' =>  $a_data]);
    }

    public function deleteProduct($id){
        try {
            producto::destroy($id);
            session()->flash('status', 'Producto eliminado');
            return redirect()->route('readProduct');
        } catch (\Throwable $th) {
            session()->flash('status', 'Error al eliminar el producto');
        }
    }

    public function ShowProduct ($id){
        $a_data = producto::find($id);
        return view('/edit_product', ['data' =>  $a_data]);
    }

    public function UpdateProduct (Request $request) {
        $a_data = $request->except('_token');
        $id =  $request->ID_Producto;
        try {
            producto::where('ID_Producto', $id)
            ->update($a_data);
            session()->flash('status', 'Producto actulizado');
            return redirect()->route('readProduct');
        } catch (\Throwable $th) {
            session()->flash('status', 'Error al actulizar el producto');
            return redirect()->route('readProduct');
        }
    }

    // public function getpdf ($id){
    //     // return $id;
        
    //     // instantiate and use the dompdf class
    //     $data = solicitud_mantenimiento::find($id);
    //     if(empty($data)){
    //        return 'no hay registros';
    //     }
    //     $dompdf = new Dompdf();
    
    //     return view('pdf', ['data' => $data]);
    //     return false;
    //     $dompdf->loadHtml(view('pdf', ['data' => $data]));
    

    //     // (Optional) Setup the paper size and orientation
    //     $dompdf->setPaper('A4', 'landscape');

    //     // Render the HTML as PDF
    //     $dompdf->render();

    //     // Output the generated PDF to Browser
    //     $dompdf->stream();
    // }
    public function getpdf($id)
    {
        $data = solicitud_mantenimiento::find($id);
        if (empty($data)) {
            return 'no hay registros';
        }
        $dompdf = new Dompdf();
        $html = view('pdf', ['data' => $data])->render();

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }

}
