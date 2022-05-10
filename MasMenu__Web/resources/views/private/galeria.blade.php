<div class="row m-0">

    <div class="col-md-6 p-0 mb-2 mb-md-0">
        <form method="POST" action="{{ route('editar_imagen', $imagenes[0]->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="col-12 p-0 pr-md-2 imagenPrimera">
                <div class="w-100 h-100 rounded" id="img1"
                    style="background:url('/img/restaurante/{{ $imagenes[0]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">
                </div>


                <label class="inputCambiarFondo">
                    <input type="file" name="archivo" required accept="image/*" class="clearablefileinput shadowHover"
                        id="id_imagen1">
                    <a class="btn btn-primary mr-2 shadowHover" role="button" href="#">
                        <span class="icon-camera"></span>
                    </a>
                </label>

                <button id="btnImg1" class="btn btn-primary botonNuevaImagen shadow py-2 px-3" type="submit">
                    Guardar
                </button>
            </div>
        </form>
    </div>
    <div class="col-md-3  p-0 pr-1 col-6">
        <div class="col-12 p-0">
            <form method="POST" action="{{ route('editar_imagen', $imagenes[1]->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="col-12 p-0 pb-1 imagenSecundaria">
                    <div class="w-100 h-100 rounded" id="img2"
                        style="background:url('/img/restaurante/{{ $imagenes[1]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">

                        <label class="inputCambiarFondo">
                            <input type="file" name="archivo" required accept="image/*"
                                class="clearablefileinput shadowHover" id="id_imagen2">
                            <a class="btn btn-primary mr-2 shadowHover" role="button" href="#">
                                <span class="icon-camera"></span>
                            </a>
                        </label>

                        <button id="btnImg2" class="btn btn-primary botonNuevaImagen shadow py-2 px-3" type="submit">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 p-0">
            <form method="POST" action="{{ route('editar_imagen', $imagenes[2]->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="col-12 p-0 pb-1 imagenSecundaria">
                    <div class="w-100 h-100 rounded" id="img3"
                        style="background:url('/img/restaurante/{{ $imagenes[2]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">

                        <label class="inputCambiarFondo">
                            <input type="file" name="archivo" required accept="image/*"
                                class="clearablefileinput shadowHover" id="id_imagen3">
                            <a class="btn btn-primary mr-2 shadowHover" role="button" href="#">
                                <span class="icon-camera"></span>
                            </a>
                        </label>

                        <button id="btnImg3" class="btn btn-primary botonNuevaImagen shadow py-2 px-3" type="submit">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-3 p-0 pl-1 col-6">
        <div class="col-12 p-0">
            <form method="POST" action="{{ route('editar_imagen', $imagenes[3]->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="col-12 p-0 pb-1 imagenSecundaria">
                    <div class="w-100 h-100 rounded" id="img4"
                        style="background:url('/img/restaurante/{{ $imagenes[3]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">

                        <label class="inputCambiarFondo">
                            <input type="file" name="archivo" required accept="image/*"
                                class="clearablefileinput shadowHover" id="id_imagen4">
                            <a class="btn btn-primary mr-2 shadowHover" role="button" href="#">
                                <span class="icon-camera"></span>
                            </a>
                        </label>

                        <button id="btnImg4" class="btn btn-primary botonNuevaImagen shadow py-2 px-3" type="submit">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 p-0">
            <form method="POST" action="{{ route('editar_imagen', $imagenes[4]->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="col-12 p-0 pb-1 imagenSecundaria">
                    <div class="w-100 h-100 rounded" id="img5"
                        style="background:url('/img/restaurante/{{ $imagenes[4]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">

                        <label class="inputCambiarFondo">
                            <input type="file" name="archivo" required accept="image/*"
                                class="clearablefileinput shadowHover" id="id_imagen5">
                            <a class="btn btn-primary mr-2 shadowHover" role="button" href="#">
                                <span class="icon-camera"></span>
                            </a>
                        </label>

                        <button id="btnImg5" class="btn btn-primary botonNuevaImagen shadow py-2 px-3" type="submit">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button data-toggle="modal" data-target="#sliderModal"
        class="btn border-dark shadow btn-light mt-3 mt-md-0 botonVerTodos" id="botonImg">
        <span class="icon-list mr-2"></span>Todas las fotos</button>

</div>
