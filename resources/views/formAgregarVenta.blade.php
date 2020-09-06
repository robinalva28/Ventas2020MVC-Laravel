@extends('layout.plantilla')

@section('title', 'Agregar Venta')

@section('contenido')

@section('h1', 'Nueva Venta')



<div class="card bg-light col-md-8 mt-5 p-3  mx-auto ">
    <h3><strong>@yield('h1')</strong></h3><br>
    <form action="/agregarVenta" method="post">
        @csrf

        <div class="form-group">
            <input type="hidden" value="">
            <label for="venNombreComprador">Nombre del Comprador:</label>
            <input type="text" class="form-control" name="venNombreComprador"  value="{{ old('venNombreComprador') }}" id="venNombreComprador" placeholder="Nombre del Comprador" required>
        </div>

        <div class="form-group">
            <label>Producto:</label>
            <select name="venIdProducto" class="form-control" required>
                <option value="">Seleccione un producto:</option>
                @foreach ( $productos as $producto )
                    <option id="venIdProducto" value="{{ $producto->prdId }}">{{ $producto->prdNombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="venStock">Cantidad:</label>
            <input type="number" name="venStock" value=""class="form-control" id="venStock" required min="0" step="1" max="5">
        </div>

        <div class="form-group">
            <label for="venPrecio">Precio:</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>

                <input type="number" name="venPrecio" value="{{--{{ old('prdPrecio') }}--}}" class="form-control" id="venPrecio" placeholder="0" min="0" step="0" required>
            </div>
        </div>

       {{-- <div class="form-group">
            <label for="prdDescripcion">Informacion adicional:</label>
            <textarea name="infoAdicional" class="form-control" id="infoAdicional">{{ old('infoAdicional') }}</textarea>
        </div>--}}

        <button type="submit" class="btn btn-dark px-4">
            {{--  <i class="far fa-plus-square fa-lg mr-2"></i>--}}
            Agregar Venta
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
