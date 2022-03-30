@extends('base')

@section('titulo', 'Página inicio MasMenu')

@section('cuerpo')

    <!-- buscador -->
    @include('formBusqueda')

    <div class="row m-0 w-100 mt-md-4">

        <div class="col-md-8 mt-md-4 offset-md-2 bg-primary p-5 text-white rounded">
            <p class="text-center w-40 textoInicio font-weight-bold">La mejor forma de compartir tu menú gratis
                <br>
                <a href="#" type="button" class="btn btn-outline-light rounded activeSingup" style="margin: 0 auto">
                    Regístrate
                </a>
            </p>

        </div>

    </div>
    <div class="row m-0">
        <div class="col-md-8 offset-md-2 py-md-5 p-0">

            <div class="row m-0">

                <div class="col-md-5 py-md-5 pl-md-0 px-md-5 p-3">
                    <div class="alt1 bg-primary rouded"
                        style="background-image: url('/img/inicio1.jpg'); background-position:center"></div>
                </div>
                <div class="col-md-4 p-md-5 p-3">
                    <div class="alt1 bg-primary rounded "
                        style="background-image: url('/img/inicio2.jpg'); background-position:center"></div>
                </div>
                <div class="col-md-3 py-md-5 pr-md-0 px-md-5 p-3">
                    <div class="alt1 bg-primary roounded"
                        style="background-image: url('/img/inicio3.jpg'); background-position:center"></div>
                </div>

                <div class="col-md-6 p-md-5 p-3  offset-md-4">
                    <div class="alt2 bg-primary roounded"
                        style="background-image: url('/img/inicio4.jpeg'); background-position:center"></div>
                </div>

            </div>
        </div>
    </div>
@endsection
