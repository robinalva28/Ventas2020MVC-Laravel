<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Compra;
use App\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    //
    /*METODO QUE RETORNA A LA VISTA DE ADD VENTA*/
    public function show()
    {
        //
        $productos = Producto::paginate(6);
        // dd($productos);
        // $allVentas = Venta::all();
        //dd($allVentas);
        return view('formAgregarVenta',
            [
                'productos'=>$productos
            ]);
    }
    public function store(Request $request)
    {
        //
        /* $validacion = $request->validate([
             'prdImagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
         ]);*/

        /*OBTENGO EL ID DEL PRODUCTO PARA SUMAR EL STOCK NUEVO AL ACTUAL*/
        $prdNom = Producto::find($request['venIdProducto']);
        //dd($prdNom['prdNombre']);
        $compra = Venta::create([
            'venNombreComprador' => $request['venNombreComprador'],
            'venIdProducto' => $request ['venIdProducto'],
            //'comNomProducto' => $prdNom['prdNombre'],
            'venPrecio' => $request['venPrecio'],
            'venStock' => $request['venStock'],
            'infoAdicional' => $request['infoAdicional']

        ]);
        $Producto = Producto::find($request ['venIdProducto']);

        /*OBTENGO EL STOCK DEL PRODUCTO Y LUEGO RESTO AL QUE YA ESTABA*/
        $stockActual= $Producto['prdStock'];
        //dd($Producto);
        $Producto->update([
            'prdStock' => $stockActual-$request['venStock'],
            /*ACTUALIZO LA CANTIDAD DE PRODUCTOS VENDIDOS*/
            'prdUnidVen' => $Producto['prdUnidVen']+$request['venStock']
        ]);


        return redirect('/'/*,'ProductosController@index'*/)
            ->with('mensaje', 'Venta registrada con éxito');

    }
}
