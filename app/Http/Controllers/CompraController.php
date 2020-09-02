<?php

namespace App\Http\Controllers;
use App\Compra;
use App\Producto;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /*METODO QUE RETORNA A LA VISTA DE ADD COMPRA*/
    public function show()
    {
        //
        $productos = Producto::paginate(6);
        // dd($productos);
        // $allVentas = Venta::all();
        //dd($allVentas);
        return view('formAgregarCompra',
            [
                'productos'=>$productos
            ]);
    }
/*METODO QUE LISTA LAS COMPRAS*/
    public function list()
    {
        //
        $compras = Compra::all();
        //dd($compras);
        // dd($productos);
        // $allVentas = Venta::all();
        //dd($allVentas);
        return view('listadoCompras',
            [
                'compras'=>$compras
            ]);
    }


    public function store(Request $request)
    {
        //
        /* $validacion = $request->validate([
             'prdImagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
         ]);*/

        $compra = Compra::create([
            'comVendedor' => $request['comVendedor'],
            'comIdProducto' => $request ['comIdProducto'],
            'comPrecio' => $request['comPrecio'],
            'comStock' => $request['comStock'],
            'infoAdicional' => $request['infoAdicional']

        ]);
        /*OBTENGO EL ID DEL PRODUCTO PARA SUMAR EL STOCK NUEVO AL ACTUAL*/
        $Producto = Producto::find($request ['comIdProducto']);
        $stockActual= $Producto['prdStock'];
        //dd($Producto);
        $Producto->update([
            'prdStock' => $request['comStock']+$stockActual
        ]);

        return redirect('adminProductos'/*,'ProductosController@index'*/)
            ->with('mensaje', 'Compra registrada con éxito');

    }
}
