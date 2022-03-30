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

<body>

    <!-- navegador sin responsive -->

    @include('login')
    @include('singup')

    <nav class="navegador p-4 w-100">
        <div class="logoNav float-left text-dark font-weight-bold"><a href="{{ route('inicio') }}"
                class="enlace">MasMenu</a> </div>

        <div class="elementosNav float-right">
            <a type="button" href="#" class="btn btn btn-primary rounded float-right activeLogin">Login</a>
            <a type="button" href="#" class="btn btn btn-outline-primary rounded-right mr-2 activeSingup">Singup</a>
        </div>
    </nav>


    @yield('cuerpo')


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
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
