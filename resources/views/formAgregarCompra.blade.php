@extends('layout.plantilla')

@section('title', 'Agregar Compra')

@section('contenido')

@section('h1', 'Nueva Compra')



<div class="card bg-light col-md-8 mt-5 p-3  mx-auto ">
    <h3><strong>@yield('h1')</strong></h3><br>
    <form action="/agregarCompra" method="post">
        @csrf

        <div class="form-group">
            <input type="hidden" value="">
            <label for="comVendedor">Nombre del Proveedor:</label>
            <input type="text" class="form-control" name="comVendedor"  value="{{ old('comVendedor') }}" id="comVendedor" placeholder="Nombre del Vendedor" required>
        </div>

        <div class="form-group">
        <label>Producto:</label>
            <select name="comIdProducto" class="form-control" required>
            <option value="">Seleccione un producto</option>
                @foreach ( $productos as $producto )
                <option id="comIdProducto" value="{{ $producto->prdId }}">{{ $producto->prdNombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="comStock">Cantidad:</label>
            <input type="number" name="comStock" value=""class="form-control" id="comStock" required min="0" step="1">
        </div>

        <div class="form-group">
            <label for="comPrecio">Precio:</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>

                <input type="number" name="comPrecio" value="{{--{{ old('prdPrecio') }}--}}" class="form-control" id="comPrecio" placeholder="0" min="0" step="0" required>
            </div>
        </div>

        <div class="form-group">
            <label for="prdDescripcion">Informacion adicional:</label>
            <textarea name="infoAdicional" class="form-control" id="infoAdicional">{{ old('infoAdicional') }}</textarea>
        </div>

        <button type="submit" class="btn btn-dark px-4">
          {{--  <i class="far fa-plus-square fa-lg mr-2"></i>--}}
            Agregar Compra
        </button>
        <br>
        <br>
        <a href="/" class="btn btn-outline-secondary ">
            volver
        </a>

        @if(count($errors))
            <div class="form-group mt-3 ">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

    </form>
</div>

@endsection
