@extends('../base')

@section('titulo', 'Mis restaurantes')

@section('cuerpo')

    <!-- buscador -->



    <div class="row mx-0">
        <div class="col-md-8 offset-md-2 pb-md-5 p-md-0 px-0 mt-3">
            <div class="px-3">
                <h1 class="border-bottom mb-3 pb-3">Mis restaurantes</h1>
            </div>

            <div class="row m-0 ">

                @if ($restaurantes)
                    @foreach ($restaurantes as $restaurante)
                        @include('public/restauranteBusqueda')
                    @endforeach
                @endif


                <div class="col-md-4 p-3 ">
                    <div data-toggle="modal" data-target="#nuevoRestaurante"
                        class="shadowHover shadow-sm border bg-white divBusqueda position-relative" style="height: 296px">
                        <p class="text-center anadirRestaurante">
                            <span class="icon-plus"></span>
                            <br><br>
                            Añadir nuevo restaruante
                        </p>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="nuevoRestaurante" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content p-md-5 p-4">
                                <form method="POST" action="{{ route('manager_crearRestaurante') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row m-0">
                                        <div class="col-12 p-0 pl-md-0 pb-4 mb-4 border-bottom">
                                            <h2 class="m-0">Nuevo restaurante </h2>
                                        </div>


                                        <div class="col-12  mb-3 p-0">
                                            <input type="text" name="nombre" id="" placeholder="Nombre restaurante "
                                                class="form-control ">
                                        </div>
                                        <div class="col-12  mb-3 p-0">
                                            <input type="text" name="telefono" id="" placeholder="Telefono"
                                                class="form-control ">
                                        </div>
                                        <div class="col-12 mb-3 p-0">
                                            <input type="text" name="email" id="" placeholder="email"
                                                class="form-control ">
                                        </div>
                                        <div class="col-12  mb-3 p-0">
                                            <input type="text" name="ciudad" id="" placeholder="Ciudad"
                                                class="form-control ">
                                        </div>
                                        <div class="col-12  mb-3 p-0">
                                            <input type="text" name="region" id="" placeholder="Region"
                                                class="form-control ">
                                        </div>
                                        <div class="col-12 mb-3 p-0">
                                            <input type="text" name="pais" id="" placeholder="Pais" class="form-control ">
                                        </div>

                                        <div class="col-12 mb-3 p-0">
                                            <input type="text" name="direccion" id="" placeholder="Dirección"
                                                class="form-control ">
                                        </div>
                                        <div class="col-12 mb-3 p-0">
                                            Imagen
                                            <input type="file" name="imagen" id="" placeholder="Imagen" value=""
                                                class="form-control ">
                                        </div>
                                        <div class="col-12 p-0 text-right">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                Crear Nuevo
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- end Modal -->
                </div>

            </div>














        </div>
    </div>
    </div>

@endsection
