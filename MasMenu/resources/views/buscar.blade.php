@extends('base')

@section('titulo', 'Buscador de MasMenu')

@section('cuerpo')

    <!-- buscador -->

    @include('formBusqueda')

    <div class="row mx-0">
        <div class="col-md-8 offset-md-2 pb-md-5 p-md-0 px-0 mt-3">
            <div class="row m-0 ">
                <!-- esto es una busqueda --->
                <div class="col-md-4 p-3 ">
                    <div class="shadowHover shadow-sm border bg-white divBusqueda">
                        <a href="{{ route('restaurante') }}" class="enlace">
                            <div class="imagenBusqueda w-100"
                                style="background:url('/img/inicio1.jpg') no-repeat; background-size: cover; background-position: center !important;">
                            </div>

                        </a>
                        <div class="cuerpoBusqueda p-3">
                            <h1>Pizzeria Capichi</h1>
                            <h2 class="mt-1 text-secondary">Albatera, Alicante <small>(España)</small></h2>
                            <div class="col-12 py-0 px-2 bg-light mt-3 shadowHover"
                                style="border-radius: 50px; height: 58px ">

                                <!-- esto es una carta -->
                                <a class="enlace" href="#">
                                    <div class="nombreMenuBuscador  py-3 px-2 float-left">
                                        Carta general
                                    </div>
                                </a>
                                <div class="iconosMenuBuscador float-left">
                                    <a data-toggle="modal" data-target="#qrCode_1"
                                        class="btn bg-dark text-center ml-1 text-light" style="padding: 12px 0"><span
                                            class="icon-qrcode"></span>
                                    </a>
                                    <a class="btn bg-primary  text-center ml-1 text-light" style="padding: 12px 0">
                                        <span class="icon-spoon-knife"></span>
                                    </a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="qrCode_1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content p-5">
                                            hola soy el qrcode 1
                                        </div>
                                    </div>
                                </div>
                                <!-- end Modal -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- aqui termina la  busqueda --->
            </div>
        </div>
    </div>
    </div>

@endsection
