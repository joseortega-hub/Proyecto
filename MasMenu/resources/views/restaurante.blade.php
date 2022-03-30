@extends('base')

@section('titulo', 'Buscador de MasMenu')

@section('cuerpo')

    <div class="imagenPrincipal bg-primary"
        style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.7) 100%), url(/img/inicio1.jpg)">
        <div class="container position-relative h-100">

            <p class="nombreRestaurante ">Pizzeria capichi</p>
        </div>
    </div>
    <div class="container mt-3 pb-5">
        <div class="row m-0">
            <div class="col-md-8 pr-md-3 px-0">
                <div class="row m-0">
                    <!--Menus Disponibles-->
                    <div class="col-12  bg-white shadow-sm border p-3 mb-3">
                        <h4 class="border-bottom pb-2 mb-2">Menús disponibles</h4>
                        <!--Carta-->
                        <div class="col-12 py-0 px-md-2 p-0 bg-light mt-3 shadowHover"
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
                    <!--Datos Disponibles-->
                    <div class="col-md-6 pr-md-2 p-0 mb-3">
                        <div class="p-3 w-100 bg-white shadow-sm border">
                            <h4 class="border-bottom pb-2 mb-2">Datos</h4>
                            <small class="text-secondary">Nombre del local</small>
                            <p class="mb-3">Pizzeria Capichi</p>
                            <small class="text-secondary">Teléfono</small>
                            <p class="mb-3">+34 67676767</p>
                            <small class="text-secondary">Correo electrónico</small>
                            <p>capichi@gmail.es</p>
                        </div>
                    </div>
                    <!--Direccion-->
                    <div class="col-md-6 pl-md-2 p-0 mb-3">
                        <div class="p-3 w-100 bg-white shadow-sm border">
                            <h4 class="border-bottom pb-2 mb-2">Dirección</h4>
                            <small class="text-secondary">Direccion</small>
                            <p class="mb-3">Calle Santa Lidia</p>
                            <small class="text-secondary">Ciudad</small>
                            <p class="mb-3">Albatera</p>
                            <small class="text-secondary">Provincia</small>
                            <p class="mb-3">Alicante</p>
                            <small class="text-secondary">Pais</small>
                            <p class="mb-3">España</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  p-0">
                <!--MHorario-->
                <div class="w-100  bg-white shadow-sm border p-3">
                    <h4 class="border-bottom pb-2 mb-2">Horario</h4>
                    <p class="mb-1 text-danger"> <small class="text-secondary">Lunes:</small> cerrado</p>
                    <p class="mb-1 text-danger"> <small class="text-secondary">Martes:</small> cerrado</p>
                    <p class="mb-1 text-danger"> <small class="text-secondary">Miercoles:</small> cerrado</p>
                    <p class="mb-1"> <small class="text-secondary">Jueves:</small> 19:00 - 23:30</p>
                    <p class="mb-1 "> <small class="text-secondary">Viernes:</small> 19:00 - 23:30</p>
                    <p class="mb-1"> <small class="text-secondary">Sabado:</small> 19:00 - 23:30</p>
                    <p class="mb-1 "> <small class="text-secondary">Domingo:</small> 19:00 - 23:30</p>

                </div>
            </div>
        </div>
    </div>


@endsection
