<!-- esto es cada restaurante de una busqueda --->
<div class="col-md-4 p-3 position-relative">
    <div class="shadowHover shadow-sm border bg-white divBusqueda">
        <!--
            Cuando pinchemos en cualquier restaurante nos redirigirá a una vista de este y pasamos el id para
            poder buscarlo en la query del metodo que lo mostrará después
        -->
        <a href="{{ route('restaurante', $restaurante->id) }}" class="enlace">
            <div class="imagenBusqueda w-100"
                style="background:url('/img/restaurante/{{ $imagenes[$loop->index] }}') no-repeat; background-size: cover; background-position: center !important;">
            </div>
        </a>
        <div class="cuerpoBusqueda p-3">
            <h1>
                {{ $restaurante->nombre }}
            </h1>
            <h2 class="mt-1 text-secondary"> {{ $restaurante->ciudad }}, {{ $restaurante->region }}
                <small>({{ $restaurante->pais }})</small>
            </h2>
        </div>
    </div>
</div>
<!-- aqui termina cada restaurante de una  busqueda --->
