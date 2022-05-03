@extends('base')

@section('titulo', 'Buscador de MasMenu')

@section('cuerpo')


    <!-- <div class="imagenPrincipal bg-primary"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.7) 100%), url(/img/inicio1.jpg)">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="container position-relative h-100">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p class="nombreRestaurante ">Pizzeria capichi</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                -->







    <div class="container mt-3 pb-5">
        <div class="row m-0">
            <div class="col-12 p-0 mb-3">

                <h1>Pizzeria Capichi</h1>
                <p>Albatera, Alicante, España</p>
                <div class="row m-0">

                    <div class="col-md-6 p-0 mb-2 mb-md-0">
                        <div class="col-12 p-0 pr-md-2 imagenPrimera">
                            <div class="w-100 h-100 rounded"
                                style="background:url('/img/inicio1.jpg') no-repeat; background-size: cover; background-position: center !important;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  p-0 pr-1 col-6">
                        <div class="col-12 p-0">
                            <div class="col-12 p-0 pb-1 imagenSecundaria">
                                <div class="w-100 h-100 rounded"
                                    style="background:url('/img/inicio1.jpg') no-repeat; background-size: cover; background-position: center !important;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="col-12  p-0 pt-1  imagenSecundaria">
                                <div class="w-100 h-100 rounded"
                                    style="background:url('/img/inicio1.jpg') no-repeat; background-size: cover; background-position: center !important;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-0 pl-1 col-6">
                        <div class="col-12 p-0">
                            <div class="col-12  p-0 pb-1  imagenSecundaria">
                                <div class="w-100 h-100 rounded"
                                    style="background:url('/img/inicio1.jpg') no-repeat; background-size: cover; background-position: center !important;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="col-12  p-0 pt-1  imagenSecundaria">
                                <div class="w-100 h-100 rounded"
                                    style="background:url('/img/inicio1.jpg') no-repeat; background-size: cover; background-position: center !important;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn border-dark shadow btn-light mt-3 mt-md-0 botonVerTodos"><span
                            class="icon-list mr-2"></span>Todas
                        las fotos</button>

                </div>
            </div>

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
                                <a class="btn bg-primary  text-center ml-1 text-light" style="padding: 12px 0">
                                    <span class="icon-plus"></span>
                                </a>
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
                            <form action="">
                                <small class="text-secondary">Nombre del local</small>
                                <input type="text" class="form-control mb-2">
                                <small class="text-secondary">Teléfono</small>
                                <input type="tel" class="form-control mb-2">
                                <small class="text-secondary">Correo electrónico</small>
                                <input type="email" class="form-control mb-2">
                                <div class="w-100 text-right">

                                    <button type="submit" class="btn btn-primary ">
                                        Confirmar cambios
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!--Direccion-->
                    <div class="col-md-6 pl-md-2 p-0 mb-3">
                        <div class="p-3 w-100 bg-white shadow-sm border">
                            <h4 class="border-bottom pb-2 mb-2">Dirección</h4>
                            <form action="">
                                <small class="text-secondary">Direccion</small>
                                <input type="text" class="form-control mb-2 ">
                                <small class="text-secondary">Ciudad</small>
                                <input type="text" class="form-control mb-2">
                                <small class="text-secondary">Provincia</small>
                                <input type="text" class="form-control mb-2">
                                <small class="text-secondary">Pais</small>
                                <input type="text" class="form-control mb-2">
                                <div class="w-100 text-right">

                                    <button type="submit" class="btn btn-primary mt-2">
                                        Confirmar cambios
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4  p-0">
                <!--MHorario-->
                <div class="w-100  bg-white shadow-sm border p-3">
                    <h4 class="border-bottom pb-2 mb-2">Horario</h4>

                    <!--Lunes-->
                    <p class="mb-1">Lunes</p>
                    <div class="w-100 border rounded p-2">
                        <input type="radio" id="si_lunes" name="lunes" value="True" class="escondido" checked>
                        <label class="bg-primary px-2 py-1 rounded text-white mr-1  lunesAb botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="si_lunes">Abierto</label>

                        <input type="radio" id="no_lunes" name="lunes" value="False" class="escondido">
                        <label class="bg-danger px-2 py-1 rounded text-white mr-1 lunesCe botonHorarioDanger shadowHover"
                            style="font-size: 12px" for="no_lunes">Cerrado</label>
                        -
                        <input type="radio" id="lunes_no_tarde" name="lunesNoTarde" value="False" class="escondido"
                            cheked>
                        <label class="bg-primary px-2 py-1 rounded text-white mr-1 lunesNt botonHorarioPrimary shadowHover "
                            style="font-size: 12px" for="lunes_no_tarde">1 turno</label>

                        <input type="radio" id="lunes_tarde" name="lunesTarde" value="True" class="escondido">
                        <label class="bg-primary px-2 py-1 rounded text-white mr-1 lunesT  botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="lunes_tarde">2 turnos</label>

                        <div class="row m-0 lunesInputs">
                            <div class="col-6 p-0 pr-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pl-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pr-1">
                                <input type="text" id="" class="bg-light form-control inputTardeL ">
                            </div>
                            <div class="col-6  p-0 pl-1">
                                <input type="text" id="" class="bg-light form-control inputTardeL">
                            </div>
                        </div>
                    </div>
                    <!--Martes-->
                    <p class="mb-1">Martes</p>
                    <div class="w-100 border rounded p-2">
                        <input type="radio" id="si_martes" name="lunes" value="True" class="escondido" checked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1  martesAb botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="si_martes">Abierto</label>

                        <input type="radio" id="no_martes" name="lunes" value="False" class="escondido">
                        <label class="bg-danger px-2 py-1 rounded text-white mr-1 martesCe botonHorarioDanger shadowHover"
                            style="font-size: 12px" for="no_martes">Cerrado</label>
                        -
                        <input type="radio" id="martes_no_tarde" name="lunesNoTarde" value="False" class="escondido"
                            cheked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 martesNt botonHorarioPrimary shadowHover "
                            style="font-size: 12px" for="martes_no_tarde">1 turno</label>

                        <input type="radio" id="martes_tarde" name="lunesTarde" value="True" class="escondido">
                        <label class="bg-primary px-2 py-1 rounded text-white mr-1 martesT  botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="martes_tarde">2 turnos</label>

                        <div class="row m-0 martesInputs">
                            <div class="col-6 p-0 pr-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pl-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pr-1">
                                <input type="text" id="" class="bg-light form-control inputTardeM ">
                            </div>
                            <div class="col-6  p-0 pl-1">
                                <input type="text" id="" class="bg-light form-control inputTardeM">
                            </div>
                        </div>
                    </div>

                    <!--Miercoles-->
                    <p class="mb-1">Miercoles</p>
                    <div class="w-100 border rounded p-2">
                        <input type="radio" id="si_miercoles" name="miercoles" value="True" class="escondido" checked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1  miercolesAb botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="si_miercoles">Abierto</label>

                        <input type="radio" id="no_miercoles" name="miercoles" value="False" class="escondido">
                        <label
                            class="bg-danger px-2 py-1 rounded text-white mr-1 miercolesCe botonHorarioDanger shadowHover"
                            style="font-size: 12px" for="no_miercoles">Cerrado</label>
                        -
                        <input type="radio" id="miercoles_no_tarde" name="miercolesNoTarde" value="False"
                            class="escondido" cheked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 miercolesNt botonHorarioPrimary shadowHover "
                            style="font-size: 12px" for="miercoles_no_tarde">1 turno</label>

                        <input type="radio" id="miercoles_tarde" name="miercolesTarde" value="True" class="escondido">
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 miercolesT  botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="miercoles_tarde">2 turnos</label>

                        <div class="row m-0 miercolesInputs">
                            <div class="col-6 p-0 pr-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pl-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pr-1">
                                <input type="text" id="" class="bg-light form-control inputTardeMi ">
                            </div>
                            <div class="col-6  p-0 pl-1">
                                <input type="text" id="" class="bg-light form-control inputTardeMi">
                            </div>
                        </div>
                    </div>
                    <!--Jueves-->
                    <p class="mb-1">Jueves</p>
                    <div class="w-100 border rounded p-2">
                        <input type="radio" id="si_jueves" name="lunes" value="True" class="escondido" checked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1  juevesAb botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="si_jueves">Abierto</label>

                        <input type="radio" id="no_jueves" name="lunes" value="False" class="escondido">
                        <label class="bg-danger px-2 py-1 rounded text-white mr-1 juevesCe botonHorarioDanger shadowHover"
                            style="font-size: 12px" for="no_jueves">Cerrado</label>
                        -
                        <input type="radio" id="jueves_no_tarde" name="lunesNoTarde" value="False" class="escondido"
                            cheked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 juevesNt botonHorarioPrimary shadowHover "
                            style="font-size: 12px" for="jueves_no_tarde">1 turno</label>

                        <input type="radio" id="jueves_tarde" name="lunesTarde" value="True" class="escondido">
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 juevesT  botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="jueves_tarde">2 turnos</label>

                        <div class="row m-0 juevesInputs">
                            <div class="col-6 p-0 pr-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pl-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pr-1">
                                <input type="text" id="" class="bg-light form-control inputTardeJ ">
                            </div>
                            <div class="col-6  p-0 pl-1">
                                <input type="text" id="" class="bg-light form-control inputTardeJ">
                            </div>
                        </div>
                    </div>
                    <!--Viernes-->
                    <p class="mb-1">Viernes</p>
                    <div class="w-100 border rounded p-2">
                        <input type="radio" id="si_viernes" name="lunes" value="True" class="escondido" checked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1  viernesAb botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="si_viernes">Abierto</label>

                        <input type="radio" id="no_viernes" name="lunes" value="False" class="escondido">
                        <label class="bg-danger px-2 py-1 rounded text-white mr-1 viernesCe botonHorarioDanger shadowHover"
                            style="font-size: 12px" for="no_viernes">Cerrado</label>
                        -
                        <input type="radio" id="viernes_no_tarde" name="lunesNoTarde" value="False" class="escondido"
                            cheked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 viernesNt botonHorarioPrimary shadowHover "
                            style="font-size: 12px" for="viernes_no_tarde">1 turno</label>

                        <input type="radio" id="viernes_tarde" name="lunesTarde" value="True" class="escondido">
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 viernesT  botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="viernes_tarde">2 turnos</label>

                        <div class="row m-0 viernesInputs">
                            <div class="col-6 p-0 pr-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pl-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pr-1">
                                <input type="text" id="" class="bg-light form-control inputTardeV ">
                            </div>
                            <div class="col-6  p-0 pl-1">
                                <input type="text" id="" class="bg-light form-control inputTardeV">
                            </div>
                        </div>
                    </div>
                    <!--Sabado-->
                    <p class="mb-1">Sabado</p>
                    <div class="w-100 border rounded p-2">
                        <input type="radio" id="si_sabado" name="lunes" value="True" class="escondido" checked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1  sabadoAb botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="si_sabado">Abierto</label>

                        <input type="radio" id="no_sabado" name="lunes" value="False" class="escondido">
                        <label class="bg-danger px-2 py-1 rounded text-white mr-1 sabadoCe botonHorarioDanger shadowHover"
                            style="font-size: 12px" for="no_sabado">Cerrado</label>
                        -
                        <input type="radio" id="sabado_no_tarde" name="lunesNoTarde" value="False" class="escondido"
                            cheked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 sabadoNt botonHorarioPrimary shadowHover "
                            style="font-size: 12px" for="sabado_no_tarde">1 turno</label>

                        <input type="radio" id="sabado_tarde" name="lunesTarde" value="True" class="escondido">
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 sabadoT  botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="sabado_tarde">2 turnos</label>

                        <div class="row m-0 sabadoInputs">
                            <div class="col-6 p-0 pr-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pl-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pr-1">
                                <input type="text" id="" class="bg-light form-control inputTardeS ">
                            </div>
                            <div class="col-6  p-0 pl-1">
                                <input type="text" id="" class="bg-light form-control inputTardeS">
                            </div>
                        </div>
                    </div>
                    <!--Domingo-->
                    <p class="mb-1">Domingo</p>
                    <div class="w-100 border rounded p-2">
                        <input type="radio" id="si_domingo" name="lunes" value="True" class="escondido" checked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1  domingoAb botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="si_domingo">Abierto</label>

                        <input type="radio" id="no_domingo" name="lunes" value="False" class="escondido">
                        <label class="bg-danger px-2 py-1 rounded text-white mr-1 domingoCe botonHorarioDanger shadowHover"
                            style="font-size: 12px" for="no_domingo">Cerrado</label>
                        -
                        <input type="radio" id="domingo_no_tarde" name="lunesNoTarde" value="False" class="escondido"
                            cheked>
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 domingoNt botonHorarioPrimary shadowHover "
                            style="font-size: 12px" for="domingo_no_tarde">1 turno</label>

                        <input type="radio" id="domingo_tarde" name="lunesTarde" value="True" class="escondido">
                        <label
                            class="bg-primary px-2 py-1 rounded text-white mr-1 domingoT  botonHorarioPrimary shadowHover"
                            style="font-size: 12px" for="domingo_tarde">2 turnos</label>

                        <div class="row m-0 domingoInputs">
                            <div class="col-6 p-0 pr-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pl-1 mb-2">
                                <input type="text" class="bg-light form-control">
                            </div>
                            <div class="col-6  p-0 pr-1">
                                <input type="text" id="" class="bg-light form-control inputTardeD ">
                            </div>
                            <div class="col-6  p-0 pl-1">
                                <input type="text" id="" class="bg-light form-control inputTardeD">
                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>


@endsection
