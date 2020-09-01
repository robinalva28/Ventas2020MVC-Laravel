@extends("layout.plantilla")

@section('title', 'VentasArg')


@section('contenido')

        <div class=" container container-fluid col-12 ">
          {{--  <br>
            <h1>Categorías</h1>
            <a href="/todosLosProductos" class="btn btn-link">Ver todo</a>
            <a href="/allMarcas" class="btn btn-link">Ir a marcas</a>
            <a href="/" class="btn btn-link">Ir a principal</a>
--}}
            <div class="row  mt-4 mb-4 d-flex  justify-content-center mt-5 ">



                <div  class="zoom ml-3 mb-3{{--col-lg-3 col-sm-12 col-md-6 mb-4--}} ">
                    <div onclick="location.href='cat/algo'" class=" card ">
                        <img src="img/venta.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="cat/algo" class="btn btn-success">Registrar Venta</a>
                        </div>
                    </div>
                </div>

                <div  class="zoom ml-3 {{--col-lg-3 col-sm-12 col-md-6 mb-4--}} ">
                    <div onclick="location.href='cat/algo'" class=" card " >
                        <img src="img/compra.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="cat/algo" class="btn btn-warning">Registrar Compra</a>
                        </div>
                    </div>
                </div>

                <div  class="zoom ml-3{{--col-lg-3 col-sm-12 col-md-6 mb-4--}} ">
                    <div onclick="location.href='cat/algo'" class=" card " >
                        <img src="img/cuentas.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="cat/algo" class="btn btn-secondary">Administrar cuentas</a>
                        </div>
                    </div>
                </div>


                <div  class="zoom ml-3 mb-3 {{--col-lg-3 col-sm-12 col-md-6 mb-4--}} ">
                    <div onclick="location.href='cat/algo'" class=" card " >
                        <img src="img/movimientos.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="cat/algo" class="btn btn-info">Ver movimientos</a>
                        </div>
                    </div>
                </div>

                <div  class="zoom ml-3 mb-3{{--col-lg-3 col-sm-12 col-md-6 mb-4--}} ">
                    <div onclick="location.href='cat/algo'" class=" card " >
                        <img src="img/deudas.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="cat/algo" class="btn btn-danger">Deudas</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- CARDS -->
    </div>

   {{-- <!-- CARRUSEL -->

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 " src="img/imagen-inicio_01.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/imagen-inicio_02.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/imagen-inicio_03.jpg" alt="Third slide">
                </div>
            </div>
        </div>


        <!-- CARRUSEL -->--}}


@endsection
{{--@section('aside')
    <div class="container container-fluid col-2 float-right">
        <aside></aside>

    </div>
@endsection--}}

