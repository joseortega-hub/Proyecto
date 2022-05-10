@extends('base')

@section('titulo', 'Buscador de MasMenu')

@section('cuerpo')
    <div class="container mt-3 pb-5">
        <div class="row m-0 ">

            <!--Contenedor prueba
                            <div class="contSlider row m-0">
                                <div id="slideshow col-12 p-0 mb-3">
                                    <div id="slides">
                                        <div class="slide show " data-slide="1">
                                            <img src="/img/{{ $imagenes[0]->urlImg }}" alt="" class="w-100 h-100">
                                        </div>

                                        <div class="slide" data-slide="2">
                                            <img src="/img/{{ $imagenes[1]->urlImg }} alt="">
                                                                    </div>

                                                                    <div class="        slide" data-slide="3">
                                            <img src="/img/{{ $imagenes[2]->urlImg }}" alt="">
                                        </div>

                                        <div class="slide" data-slide="4">
                                            <img src="/img/{{ $imagenes[3]->urlImg }}" alt="">
                                        </div>

                                        <div class="slide" data-slide="5">
                                            <img src="/img/{{ $imagenes[4]->urlImg }}" alt="">
                                        </div>

                                        <div class="slide-btn next">
                                            <span>&raquo;</span>
                                        </div>

                                        <div class="slide-btn prev">
                                            <span>&laquo;</span>
                                        </div>
                                    </div>

                                    <div id="gallery">
                                        <div class="thumbnail" data-slide="1">
                                            <img src="/img/{{ $imagenes[0]->urlImg }}" alt="">
                                        </div>

                                        <div class="thumbnail" data-slide="2">
                                            <img src="/img/{{ $imagenes[1]->urlImg }}" alt="">
                                        </div>

                                        <div class="thumbnail" data-slide="3">
                                            <img src="/img/{{ $imagenes[2]->urlImg }}" alt="">
                                        </div>

                                        <div class="thumbnail" data-slide="4">
                                            <img src="/img/{{ $imagenes[3]->urlImg }}" alt="">
                                        </div>

                                        <div class="thumbnail" data-slide="5">
                                            <img src="/img/{{ $imagenes[4]->urlImg }}" alt="">
                                        </div>
                                    </div>
                                </div>




                            </div> -->




            <!--Contenedor imagenes-->
            <div class="col-12 p-0 mb-3 contImg">

                <h1>{{ $restaurante->nombre }}</h1>
                <p>{{ $restaurante->ciudad }}, {{ $restaurante->region }}, {{ $restaurante->pais }}</p>
                <div class="row m-0">

                    <div class="col-md-6 p-0 mb-2 mb-md-0">
                        <div class="col-12 p-0 pr-md-2 imagenPrimera">
                            <div class="w-100 h-100 rounded"
                                style="background:url('/img/restaurante/{{ $imagenes[0]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  p-0 pr-1 col-6">
                        <div class="col-12 p-0">
                            <div class="col-12 p-0 pb-1 imagenSecundaria">
                                <div class="w-100 h-100 rounded"
                                    style="background:url('/img/restaurante/{{ $imagenes[1]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="col-12  p-0 pt-1  imagenSecundaria">
                                <div class="w-100 h-100 rounded"
                                    style="background:url('/img/restaurante/{{ $imagenes[2]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-0 pl-1 col-6">
                        <div class="col-12 p-0">
                            <div class="col-12  p-0 pb-1  imagenSecundaria">
                                <div class="w-100 h-100 rounded"
                                    style="background:url('/img/restaurante/{{ $imagenes[3]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="col-12  p-0 pt-1  imagenSecundaria">
                                <div class="w-100 h-100 rounded"
                                    style="background:url('/img/restaurante/{{ $imagenes[4]->urlImg }}') no-repeat; background-size: cover; background-position: center !important;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-toggle="modal" data-target="#sliderModal"
                        class="btn border-dark shadow btn-light mt-3 mt-md-0 botonVerTodos" id="botonImg">
                        <span class="icon-list mr-2"></span>Todas las fotos</button>
                    @include('public/slider');

                </div>
            </div>
            <div class="col-md-8 pr-md-3 px-0">
                <div class="row m-0">
                    <!--Menus Disponibles-->
                    <div class="col-12  bg-white shadow-sm border p-3 mb-3">
                        <h4 class="border-bottom pb-2 mb-2">Menús disponibles</h4>
                        @foreach ($menus as $menu)
                            <div class="col-12 py-0 px-md-2 p-0 bg-light mt-3 shadowHover"
                                style="border-radius: 50px; height: 58px ">
                                <!-- esto es una carta -->
                                <a class="enlace" href="#">
                                    <div class="nombreMenuBuscador  py-3 px-2 float-left">
                                        {{ $menu->nombre }}
                                    </div>
                                </a>
                                <div class="iconosMenuBuscador float-left">
                                    <a data-toggle="modal" data-target="#qrCode_{{ $menu->id }}"
                                        class="btn bg-dark text-center ml-1 text-light" style="padding: 12px 0"><span
                                            class="icon-qrcode"></span>
                                    </a>
                                    <a class="btn bg-primary  text-center ml-1 text-light"
                                        href="/PDF/{{ $menu->urlArchivo }}" target="_blank" style="padding: 12px 0">
                                        <span class="icon-spoon-knife"></span>
                                    </a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="qrCode_{{ $menu->id }}" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content p-5">
                                            <img class="w-100" src="/img/QR/{{ $menu->urlQR }}" alt="Codigo QR">
                                        </div>
                                    </div>
                                </div>
                                <!-- end Modal -->
                            </div>
                        @endforeach
                    </div>
                    <!--Datos Disponibles-->
                    <div class="col-md-6 pr-md-2 p-0 mb-3">
                        <div class="p-3 w-100 bg-white shadow-sm border">
                            <h4 class="border-bottom pb-2 mb-2">Datos</h4>
                            <small class="text-secondary">Nombre del local</small>
                            <p class="mb-3"> {{ $restaurante->nombre }}</p>
                            <small class="text-secondary">Teléfono</small>
                            <p class="mb-3"> {{ $restaurante->telefono }}</p>
                            <small class="text-secondary">Correo electrónico</small>
                            <p> {{ $restaurante->gmail }}</p>
                        </div>
                    </div>
                    <!--Direccion-->
                    <div class="col-md-6 pl-md-2 p-0 mb-3">
                        <div class="p-3 w-100 bg-white shadow-sm border">
                            <h4 class="border-bottom pb-2 mb-2">Dirección</h4>
                            <small class="text-secondary">Direccion</small>
                            <p class="mb-3"> {{ $restaurante->direccion }}</p>
                            <small class="text-secondary">Ciudad</small>
                            <p class="mb-3"> {{ $restaurante->ciudad }}</p>
                            <small class="text-secondary">Provincia</small>
                            <p class="mb-3"> {{ $restaurante->region }}</p>
                            <small class="text-secondary">Pais</small>
                            <p class="mb-3"> {{ $restaurante->pais }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  p-0">
                <!--MHorario-->
                <div class="w-100  bg-white shadow-sm border p-3">
                    <h4 class="border-bottom pb-2 mb-2">Horario</h4>
                    <p class="mb-1 "> <small class="text-secondary">Lunes:</small>
                        @if ($horario->lunes_abierto == 0)
                            <span class="text-danger">cerrado</span>
                        @else
                            @if ($horario->lunes_turnos)
                                {{ $horario->lunes_abrir1 }} - {{ $horario->lunes_cerrar1 }} /
                                {{ $horario->lunes_abrir2 }} - {{ $horario->lunes_cerrar2 }}
                            @else()
                                {{ $horario->lunes_abrir1 }} - {{ $horario->lunes_cerrar1 }}
                            @endif
                        @endif
                    </p>
                    <p class="mb-1 "> <small class="text-secondary">Martes:</small>
                        @if (!$horario->martes_abierto)
                            <span class="text-danger">cerrado</span>
                        @else
                            @if ($horario->martes_turnos)
                                {{ $horario->martes_abrir1 }} - {{ $horario->martes_cerrar1 }} /
                                {{ $horario->martes_abrir2 }} - {{ $horario->martes_cerrar2 }}
                            @else()
                                {{ $horario->martes_abrir1 }} - {{ $horario->martes_cerrar1 }}
                            @endif
                        @endif
                    </p>

                    <p class="mb-1 "> <small class="text-secondary">Miercoles:</small>
                        @if (!$horario->miercoles_abierto)
                            <span class="text-danger">cerrado</span>
                        @else
                            @if ($horario->miercoles_turnos)
                                {{ $horario->miercoles_abrir1 }} - {{ $horario->miercoles_cerrar1 }} /
                                {{ $horario->miercoles_abrir2 }} - {{ $horario->miercoles_cerrar2 }}
                            @else()
                                {{ $horario->miercoles_abrir1 }} - {{ $horario->miercoles_cerrar1 }}
                            @endif
                        @endif
                    </p>
                    <p class="mb-1 "> <small class="text-secondary">Jueves:</small>
                        @if (!$horario->jueves_abierto)
                            <span class="text-danger">cerrado</span>
                        @else
                            @if ($horario->jueves_turnos)
                                {{ $horario->jueves_abrir1 }} - {{ $horario->jueves_cerrar1 }} /
                                {{ $horario->jueves_abrir2 }} - {{ $horario->jueves_cerrar2 }}
                            @else()
                                {{ $horario->jueves_abrir1 }} - {{ $horario->jueves_cerrar1 }}
                            @endif
                        @endif
                    </p>
                    <p class="mb-1 "> <small class="text-secondary">Viernes:</small>
                        @if (!$horario->viernes_abierto)
                            <span class="text-danger">cerrado</span>
                        @else
                            @if ($horario->viernes_turnos)
                                {{ $horario->viernes_abrir1 }} - {{ $horario->viernes_cerrar1 }} /
                                {{ $horario->viernes_abrir2 }} - {{ $horario->viernes_cerrar2 }}
                            @else()
                                {{ $horario->viernes_abrir1 }} - {{ $horario->viernes_cerrar1 }}
                            @endif
                        @endif
                    </p>
                    <p class="mb-1 "> <small class="text-secondary">Sabado:</small>
                        @if (!$horario->sabado_abierto)
                            <span class="text-danger">cerrado</span>
                        @else
                            @if ($horario->sabado_turnos)
                                {{ $horario->sabado_abrir1 }} - {{ $horario->sabado_cerrar1 }} /
                                {{ $horario->sabado_abrir2 }} - {{ $horario->sabado_cerrar2 }}
                            @else()
                                {{ $horario->sabado_abrir1 }} - {{ $horario->sabado_cerrar1 }}
                            @endif
                        @endif
                    </p>
                    <p class="mb-1 "> <small class="text-secondary">Domingo:</small>
                        @if (!$horario->domingo_abierto)
                            <span class="text-danger">cerrado</span>
                        @else
                            @if ($horario->domingo_turnos)
                                {{ $horario->domingo_abrir1 }} - {{ $horario->domingo_cerrar1 }} /
                                {{ $horario->domingo_abrir2 }} - {{ $horario->domingo_cerrar2 }}
                            @else()
                                {{ $horario->domingo_abrir1 }} - {{ $horario->domingo_cerrar1 }}
                            @endif
                        @endif
                    </p>

                </div>
            </div>
        </div>
    </div>


@endsection
