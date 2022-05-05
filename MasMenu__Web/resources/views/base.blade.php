<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/icomoon/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <title>@yield('titulo', 'MasMenu')</title>
</head>

<body class="mb-5">

    <!-- navegador sin responsive -->



    <nav class="navegador p-3 p-md-4 w-100">
        <div class="logoNav float-left text-dark font-weight-bold"><a href="{{ route('home') }}"
                class="enlace">MasMenu</a> </div>

        <div class="elementosNav float-right">
            <!-- elementos publicos -->
            @if (Auth::guest())
                <a type="button" href="{{ route('register') }}"
                    class="btn btn btn-outline-primary rounded activeSingup">Singup</a>
                <a type="button" href="{{ route('login') }}" class="btn btn btn-primary rounded activeLogin">Login</a>
            @else
                <!-- elementos privados -->
                <a type="button" href="{{ route('manager') }}" class="btn btn btn-primary rounded">Manager</a>

                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="icon-user"></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a data-toggle="modal" data-target="#editarPerfil" class="dropdown-item" href="#">Perfil</a>
                    <div class="px-4 py-2">
                        <hr class="m-0">
                    </div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div class="nav-element">
                            Cerrar Sesión
                        </div>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endif

            <!-- Modal  editar Perfil-->
            <div class="modal fade" id="editarPerfil" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content p-md-5 p-4">
                        <form action="">
                            <div class="row m-0">
                                <div class="col-12 p-0 mt-md-5 pl-md-0 pb-4 mb-4 border-bottom">
                                    <h2 class="m-0">Editar perfil </h2>
                                </div>

                                <div class="col-md-6 pr-md-2 p-0 mb-3">
                                    <label for="nombre">Nombre de usuario</label>
                                    <input type="text" name="nombre" id="" required class="form-control">
                                </div>
                                <div class="col-md-6 pl-md-2 p-0   mb-3">
                                    <label for="nombre">Email</label>
                                    <input type="email" name="" id="" required class="form-control">
                                </div>
                                <div class="col-md-6 pr-md-2 p-0 mb-3">
                                    <label for="nombre">Telefono</label>
                                    <input type="text" name="telefono" id="" required class="form-control">
                                </div>
                                <div class="col-md-6 pl-md-2 p-0   mb-3">
                                    <label for="password2">Dirección</label>
                                    <input type="text" name="provincia" id="" required class="form-control">
                                </div>
                                <div class="col-md-6 pl-md-2 p-0   mb-3">
                                    <label for="nombre">Ciudad</label>
                                    <input type="text" name="ciudad" id="" required class="form-control">
                                </div>


                                <div class="col-md-6 pr-md-2 p-0 mb-3">
                                    <label for="password1">Pais</label>
                                    <input type="text" name="pais" id="" required class="form-control">
                                </div>
                                <div class="col-md-6 pl-md-2 p-0   mb-3">
                                    <label for="password2">Provincia</label>
                                    <input type="text" name="provincia" id="" required class="form-control">
                                </div>


                                <div class="col-12 p-0 text-right mt-3 border-top pt-3">

                                    <button type="submit" class="btn btn-primary">
                                        Actualizar
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- end Modal -->


        </div>
    </nav>


    @yield('cuerpo')


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="/js/labelHorario.js"></script>
    <script src="/js/slider.js"></script>
    <script>
        // activar el menu de login
        $('.activeLogin, .overlayLogin, .cerrarLogin').click(function() {
            if ($('.loginDiv').hasClass('active')) {
                $('.loginDiv, .overlayLogin').removeClass('active');
                $('html').css('overflow-y', 'scroll');
            } else {
                $('.loginDiv, .overlayLogin').addClass('active');
                $('html').css('overflow-y', 'hidden');
            }
        });

        // activar el menu de registro
        $('.activeSingup, .overlaySingup, .cerrarSingup').click(function() {
            if ($('.singupDiv').hasClass('active')) {
                $('.singupDiv, .overlaySingup').removeClass('active');
                $('html').css('overflow-y', 'scroll');
            } else {
                $('.singupDiv, .overlaySingup').addClass('active');
                $('html').css('overflow-y', 'hidden');
            }
        });
    </script>
</body>

</html>
