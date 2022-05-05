<!-- esto es una busqueda --->
<div class="col-md-4 p-3 position-relative">



    <div class="shadowHover shadow-sm border bg-white divBusqueda">
        <a href="{{ route('restaurante', $restaurante->id) }}" class="enlace">
            <div class="imagenBusqueda w-100"
                style="background:url('/img/{{ $imagenes[$loop->index] }}') no-repeat; background-size: cover; background-position: center !important;">
            </div>

        </a>
        <div class="cuerpoBusqueda p-3">
            <h1>
                <a href="#" role="button" class="btn btn-light text-danger btn-sm botonEliminarRestaurante">
                    <span class="icon-bin"></span>
                </a>
                {{ $restaurante->nombre }}


            </h1>
            <h2 class="mt-1 text-secondary"> {{ $restaurante->ciudad }}, {{ $restaurante->region }}
                <small>({{ $restaurante->pais }})</small>
            </h2>
        </div>
    </div>
</div>
<!-- aqui termina la  busqueda --->
