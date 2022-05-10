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


    <div class="overlayCookie" id="cookie1">
        <div class="cookiesms shadow-lg">
            <h5>Ley de Cookies Europea</h5>
            <p class="mb-0">
                Utilizamos Cookies propias y de terceros para elaborar información estadística
                y mostrarle contenido personalizado a través del análisis de su navegación que
                compartimos con nuestros partners. Si continuas navegando aceptas nuestros
                terminos y condiciones
            </p>
            <div onclick="controlcookies()" class="btn btn-primary btn-sm float-right mt-3 shadowHover shadow-sm">Aceptar
            </div>
        </div>
    </div>

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

                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                @include('private/perfil')
            @endif



        </div>
    </nav>


    @yield('cuerpo')

    @include('footer')


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="/js/labelHorario.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/slider.js"></script>
    <script src="/js/qrcodejs/qrcode.js"></script>

    @yield('js')
</body>

</html>
