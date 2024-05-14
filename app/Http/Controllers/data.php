<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\solicitud_mantenimiento;
use App\Models\usuario;

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
            session()->flash('status', 'Error al crear el producto');
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

}
