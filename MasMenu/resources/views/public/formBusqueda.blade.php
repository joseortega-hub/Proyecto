<div class="row m-0 buscadorInicio px-0 px-md-3 py-md-4 py-0">
    <form method="get" action="{{ route('buscar') }}" class="col-md-8 offset-md-2 shadow-sm border px-3 py-3 bg-white">
        <div class="row m-0 h-100 py-2">
            <div class="col-md-5 mb-md-0 mb-2 h-md-100 px-md-1 px-0">
                <input class="form-control h-100 w-100" type="text" placeholder="Nombre" name="nombre"
                    value="{{ $nombre }}">
            </div>
            <div class="col-md-4 mb-md-0 mb-2 h-md-100  px-md-1 px-0"><input class="form-control h-100  w-100" type="text"
                    placeholder="Ciudad" name="ciudad" value="{{ $ciudad }}">
            </div>
            <div class="col-md-3 mb-md-0 mb-2 h-md-100  px-md-1 px-0"><button type="submit"
                    class="h-100 w-100 rounded btn btn-primary font-weight-bold">Encontrar</button>
            </div>
        </div>
    </form>
</div>
