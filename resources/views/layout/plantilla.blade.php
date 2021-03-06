<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->

    <link rel="icon" href="{{asset('img/logo2.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='css/style.css'>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/20d3506334.js" crossorigin="anonymous"></script>



    <meta charset="UTF-8">
</head>

<body>
<header>


 {{--   @if (Route::has('login'))
        @auth--}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a href="/"><img class="navbar-brand" src="{{asset('img/logo-198x66.png')}}" alt="logo" height="60px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav ml-auto " >

                <li class="nav-item active ">
                    <a class="nav-link" href="/adminProductos">STOCK</a>
                </li>

              {{--  <li class="nav-item active ">
                    <a class="nav-link" href="/agregarProducto">INGRESAR PRODUCTO</a>
                </li>--}}

               <li class="nav-item active">
                    <a class="nav-link" href="/">INICIO</a>
                </li>
            </ul>

        </div>
    </nav>
{{--        @endauth
    @endif--}}


</header>

@yield('contenido')
@yield('aside')
{{--
<!-- FOOTER -->
<footer class="page-footer font-small blue mt-auto">
    ​
    <!-- Footer Links -->
    <div id="footer" class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">VentasArg</h5>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">mapa sitio</h5>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->


                <ul class="list-unstyled">
                    <li>
                        <a href="#!"><i class="fab fa-facebook-f" ></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-instagram" ></i></a>
                    </li>
                  --}}{{--  <li>
                        <i class="far fa-envelope" > <a href="mailto:robinnet28@gmail.com">robinnet28@gmail.com</a></i>
                        ​
                    </li>--}}{{--
                    <li>
                        <i class="fas fa-phone" > </i>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Robinson Alvarez

    </div>
    <!-- Copyright -->

</footer>--}}

<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>


