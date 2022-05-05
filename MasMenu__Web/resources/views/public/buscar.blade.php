@extends('../base')

@section('titulo', 'Buscador de MasMenu')

@section('cuerpo')

    <!-- buscador -->

    @include('public/formBusqueda')

    <div class="row mx-0">
        <div class="col-md-8 offset-md-2 pb-md-5 p-md-0 px-0 mt-3">
            <div class="row m-0 ">
                @if ($restaurantes)
                    @foreach ($restaurantes as $restaurante)
                        @include('public/restauranteBusqueda')
                    @endforeach
                @else
                    <p class="px-3 text-center w-100">Lo sentimos no hay resultados de su busqueda :(</p>

                @endif
            </div>
        </div>
    </div>
    </div>

@endsection
