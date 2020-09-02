<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function store(Request $request)
    {
        //
       /* $validacion = $request->validate([
            'prdImagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);*/

        $producto = Producto::create([
            'prdNombre' => $request['prdNombre'],
            'prdDescripcion' => $request ['prdDescripcion'],
            'prdPrecio' => $request['prdPrecio'],
            'prdStock' => 0,
            'prdEliminado' => false
        ]);

      return redirect('adminProductos'/*,'ProductosController@index'*/)
          ->with('mensaje', 'Producto '.$producto->prdNombre.' creado con éxito');

    }

    public function index()
    {
        //
        $productos = Producto::with('getVenta')->paginate(6);
       // dd($productos);
       // $allVentas = Venta::all();
        //dd($allVentas);
        return view('adminListaProductos',
            [
                'productos'=>$productos
            ]);
    }

    public function edit($id)
    {
       $producto = Producto::find($id);

       // if($producto->prdIdUsuario == auth()->user()->usrId) {

            return view('/formModificarProducto',
                [
                    'producto' => $producto
                ]);
        /*}else{
            return redirect('/adminUsuarioProductos')/*->with('mensaje', 'Imposible modificar producto.');
        }*/

    }


//    public function update(Request $request,$id)
//    {
//
//        //$Producto = Producto::find($id);
//
//        $Producto = Producto::where('prdId','=',$id)->get();
//        //dd($Producto);
//            // $Producto = Producto::find($request->input('prdId'));
//            $Producto->prdNombre = $request->input('prdNombre');
//            $Producto->prdDescripcion = $request->input('prdDescripcion');
//            $Producto->prdPrecio = $request->input('prdPrecio');
//            $Producto->save();
//
//            return redirect('/adminProductos')
//                ->with('mensaje', 'Producto '.$Producto[0]->prdNombre.' modificado con éxito');
//
//
//    }

    public function update(Request $request,$id)
    {

        $Producto = Producto::find($id);
        //dd($Producto);
        $Producto->update([

            // $Producto = Producto::find($request->input('prdId'));
            $Producto->prdNombre = $request->input('prdNombre'),
            $Producto->prdDescripcion = $request->input('prdDescripcion'),
            $Producto->prdPrecio = $request->input('prdPrecio')
           ]);

            return redirect('/adminProductos')
                ->with('mensaje', 'Producto '.$Producto->prdNombre.' modificado con éxito');


    }

    public function destroy($id)
    {

        $producto = Producto::where('prdId','=',$id)->get();
       // dd($producto);
        Producto::destroy($id);

        return redirect('/adminProductos')
            ->with('mensaje', 'Producto ' . $producto[0]->prdNombre . ' eliminado con éxito');;
    }
}
