@extends('layout.plantilla')

@section('title', 'Modificar producto')

@section('h1', 'Modificar producto')
@section('contenido')



<div class="card bg-light col-md-7 mt-5 p-3 mx-auto">
    @if( session()->has('mensaje') )
        <div class="alert alert-success">
            {{ session()->get('mensaje') }}
        </div>
    @endif
    <form action="/modificarProducto/{{$producto->prdId}}" method="post" >
        @csrf
        {{--INPUTS HIDDENS--}}

       {{-- <input type="hidden" name="prdIdUsuario" value="{{Auth::user()->usrId}}">--}}

        {{--FIN DE INPUT HIDDEN--}}

        <div class="form-group">
            <label for="prdNombre">Nombre del Producto: antes  {{$producto->prdNombre }}</label>
            <input type="text" class="form-control" name="prdNombre"  value="{{$producto->prdNombre }}" id="prdNombre" placeholder="Nombre del Producto" required>
        </div>

        <div class="form-group">
            <label for="prdPrecio">Precio:</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input type="number" name="prdPrecio" value="{{ $producto->prdPrecio }}" class="form-control" id="prdPrecio" placeholder="0" min="0" step="0" required>
            </div>
        </div>

        <div class="form-group">
            <label for="prdDescripcion">Descripción:</label>
            <textarea name="prdDescripcion" class="form-control" id="prdDescripcion">{{ $producto->prdDescripcion }}</textarea>
        </div>


        <br>
        <button type="submit" onclick="return confirm('Modificar?')" class="btn btn-dark px-4">
            <i class="far fa-plus-square fa-lg mr-2"></i>
            Modificar Producto
        </button>
        <a href="/adminProductos" class="btn btn-outline-secondary ml-3">
            volver
        </a>

        @if(count($errors))
            <div class="form-group mt-3">
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
