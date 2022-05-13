@extends('base')
@section('titulo', 'Página inicio MasMenu')
@section('cuerpo')

    <!-- buscador -->
    @include('public/formBusqueda')


    @if (Auth::guest())
        <!--
            Mediante este if nos aseguramos que solo salga el mensaje de registrase  a los usuarios que no esten registrados
        -->
        <div class="row m-0 w-100 px-0 px-md-4">
            <div class="col-md-8 mt-md-4 offset-md-2 bg-primary p-5 text-white rounded">
                <p class="text-center w-40 textoInicio font-weight-bold">La mejor forma de compartir tu menú gratis
                    <br>
                    <!-- Enlace que reedirige al sign up -->
                    <a href="{{ route('register') }}" type="button" class="btn btn-outline-light rounded activeSingup"
                        style="margin: 0 auto">
                        Regístrate
                    </a>
                </p>

            </div>

        </div>
    @endif
    <div class="row mx-0">
        <div class="col-md-8 offset-md-2 pb-md-5 p-md-0 px-0 mt-3">
            <div class="row m-0 ">
                <!--
                        Mediante este if vemos que exista algun restaurante para mostrar
                    -->
                @if ($restaurantes)
                    <!--
                            Si restaurantes no esta vacio como sabemos que es un array con todos los restaurantes
                            lo recorremos y vamos incluyendo un div con cada restaurante y sus datos
                        -->
                    @foreach ($restaurantes as $restaurante)
                        @include('public/restauranteBusqueda')
                    @endforeach
                @else
                    <p class="px-3 text-center w-100">Lo sentimos no hay resultados de su busqueda :(</p>
                @endif
            </div>
        </div>
    </div>
@endsection
