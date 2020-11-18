@extends("layout.plantilla")

@section('title', 'Movimientos')


@section('contenido')

    <!--QUIENES SOMOS-->
{{--    <div class="jumbotron">
        <h1 class="display-4">HOME- QUIENES SOMOS</h1>

        <hr class="my-4">
        <p>Bienvenidos al Círculo Privado de Compra-Venta de Artículos.</p>
        <p>Tenemos algo que vender, quizá mi compañero de oficina o de la oficina de al lado está buscando justo lo mismo, sin gastos de envíos ni comisiones. Conociendo a quien nos lo vende así nace InterTienda, un círculo de transacciones de productos dentro de tu ámbito de trabajo.</p>
        <p>¿Cómo acceder? Sencillo, te registrás y un administrador valida que pertenecés a la empresa, luego de ésto te llega el email y ya puedes publicar y ver los productos.</p>

    </div>--}}

    <!--QUIENES SOMOS-->

    <div class="container-fluid "  >

        <!-- CARDS DE PRODUCTOS-->
        <div class=" container container-fluid col-9 ">
            <br>
            <h1>Movimientos</h1>
            <a href="/" class="btn btn-link">Ver todos</a>
            <a href="/" class="btn btn-link">Ir al inicio</a>
            <div class="row  mt-4 mb-4 d-flex  justify-content-center mt-5 ">

            <div  class="zoom ml-3{{--col-lg-3 col-sm-12 col-md-6 mb-4--}} ">
            <div class="card" style="width: 23rem;">
                <div class="card-body">
                    <h5 class="card-title">Compras</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="/listadoCompras" class="btn btn-primary">Ver compras</a>
                </div>
            </div> </div>

            <div  class="zoom ml-3{{--col-lg-3 col-sm-12 col-md-6 mb-4--}} ">
            <div class="card" style="width: 23rem;">
                <div class="card-body">
                    <h5 class="card-title">Ventas</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Ver ventas</a>
                </div>
            </div> </div>

            <div  class="zoom ml-3{{--col-lg-3 col-sm-12 col-md-6 mb-4--}} ">
            <div class="card" style="width: 23rem;">
                <div class="card-body">
                    <h5 class="card-title">General</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Ver todos</a>
                </div>
            </div>
            </div>
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

