@extends('layout.plantilla')

@section('title', 'Productos')

@section('contenido')

    {{-- mensajes de ok --}}
    @if( session()->has('mensaje') )
        <div class="alert alert-success">
            {{ session()->get('mensaje') }}
        </div>
    @endif

<div class=" col-md-10 mt-1 p-1 mx-auto mx-3" style="background-color: azure">
    <table role="table" class="table table-hover table-striped table-border ">
        <thead class="thead-dark">
        <tr class="mr-3">
            <th>ID</th>
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Unid. <br>Vendidas</th>
            <th></th>
            <th></th>


            {{--<th colspan="2">
                <a href="/formAgregarProducto" class="btn btn-dark">
                    Ingresar producto
                </a>
            </th>--}}
        </tr>
        </thead>
        <tbody role="rowgroup">

        @foreach( $productos as $detalle )
            <tr>
                <td>{{ $detalle->prdId }}</td>
                <td>{{ $detalle->prdNombre }}</td>
                <td>{{ $detalle->prdDescripcion }}</td>
                <td>{{ $detalle->prdPrecio}}</td>
                <td>{{ $detalle->prdStock}}</td>
                <td>{{ $detalle->prdUnidVen}}</td>
                <td role="cell"  class="tabla-valor"><p>
                        <a href="modificarProducto/{{$detalle->prdId}}" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </p>
                </td>

                <td role="cell"  class="tabla-valor"><p>
                        <a href="eliminarProducto/{{$detalle->prdId}}" onclick="return confirm('Desea eliminar')" class="btn btn-outline-danger">
                            Elim
                        </a>
                    </p>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
    <a href="/agregarProducto" class="btn btn-dark">
        Ingresar producto
    </a>
</div>
@endsection
