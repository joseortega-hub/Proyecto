@extends('base')
@section('titulo', $restaurante->nombre . ' editor')
@section('cuerpo')
    <div class="container mt-3 pb-5">
        @include('public/slider')
        <div class="row m-0">
            <div class="col-12 p-0 mb-3">
                <h1>
                    {{ $restaurante->nombre }}
                    <!--
                                    Icono de papelera que te redirige al metodo para eliminar el restaurante
                                -->
                    <a href="{{ route('eliminar_restaurante', $restaurante->id) }}" class="btn btn-danger py-2 px-3">
                        <span class="icon-bin2"></span></a>
                </h1>
                <p>{{ $restaurante->ciudad }}, {{ $restaurante->region }}, {{ $restaurante->pais }}</p>
                @include('private/galeria')
            </div>
            <div class="col-md-8 pr-md-3 px-0">
                <div class="row m-0">
                    <!--Menus Disponibles-->
                    <div class="col-12  bg-white shadow-sm border p-3 mb-3">
                        <h4 class="border-bottom pb-2 mb-2">Menús disponibles</h4>
                        @foreach ($menus as $menu)
                            <div class="col-12 py-0 px-md-2 p-0 bg-light mt-3 shadowHover"
                                style="border-radius: 50px; height: 58px " id="menu_{{ $menu->id }}">
                                <!-- esto es una carta -->
                                <a class="enlace" href="#">
                                    <div class="nombreMenuBuscador2  py-3 px-2 float-left">
                                        {{ $menu->nombre }}
                                    </div>
                                </a>
                                <div class="iconosMenuBuscador2 float-left">
                                    <a onclick="eliminarMenu({{ $menu->id }})"
                                        class="btn bg-danger text-center ml-1 text-light" style="padding: 12px 0">
                                        <span class="icon-bin2"></span>
                                    </a>
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
                                        <div class="modal-content p-5" id="content_{{ $menu->id }}">

                                        </div>
                                    </div>
                                </div>
                                <!-- end Modal -->
                            </div>
                        @endforeach

                        <a data-toggle="modal" data-target="#newMenu" class="enlace">
                            <div class="col-4 text-center py-4 px-3 mx-auto offset-4 mt-3 shadowHover"
                                style="cursor: pointer; border-radius:50px">
                                <span class="icon-plus"></span>
                            </div>
                        </a>


                        @include('private/crearMenu')

                    </div>
                    <!--Datos Disponibles-->
                    <div class="col-md-6 pr-md-2 p-0 mb-3">
                        <a target="_blank" href="{{ route('print', $restaurante->id) }}"
                            class="shadow-sm mb-3 shadowHover btn btn-primary btn-block">
                            <span class="icon-file-pdf"></span>
                            Generar PDF con datos
                        </a>
                        <div class="p-3 w-100 bg-white shadow-sm border">
                            <h4 class="border-bottom pb-2 mb-2">Datos</h4>
                            <form method="POST" action="{{ route('editar_datos', $restaurante->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <small class="text-secondary">Nombre del local</small>
                                <input type="text" class="form-control mb-2" name="nombre"
                                    value="{{ $restaurante->nombre }}">
                                <small class="text-secondary">Teléfono</small>
                                <input type="tel" class="form-control mb-2" name="telefono"
                                    value="{{ $restaurante->telefono }}">
                                <small class="text-secondary">Correo electrónico</small>
                                <input type="email" class="form-control mb-3" name="gmail"
                                    value="{{ $restaurante->gmail }}">
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
                            <form method="POST" action="{{ route('editar_direccion', $restaurante->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <small class="text-secondary">Direccion</small>
                                <input type="text" class="form-control mb-2" name="direccion"
                                    value="{{ $restaurante->direccion }}">
                                <small class="text-secondary">Ciudad</small>
                                <input type="text" class="form-control mb-2" name="ciudad"
                                    value="{{ $restaurante->ciudad }}">
                                <small class="text-secondary">Provincia</small>
                                <input type="text" class="form-control mb-2" name="region"
                                    value="{{ $restaurante->region }}">
                                <small class="text-secondary">Pais</small>
                                <input type="text" class="form-control mb-2" name="pais"
                                    value="{{ $restaurante->pais }}">
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
                    @include('/private/horario')
                </div>
            </div>
        </div>
    </div>



@endsection


@section('js')

    <script type="text/javascript">
        @foreach ($menus as $menu)
            new QRCode(document.getElementById("content_" + {{ $menu->id }}),
                "https://www.masmenu.com/PDF/{{ $menu->urlArchivo }}");
        @endforeach
    </script>


    <script>
        /*
            Funcion de Ayax que elimina cada menu sin recragar la pagina
            para ello redirige al metodo que elimina al menu de la base de datos y tambien elimina el div que contenia
            al menu eliminandolo de forma visual y sin cargar

            */
        function eliminarMenu(id) {

            const xhttp = new XMLHttpRequest();

            // Define a callback function
            xhttp.onload = function() {
                document.getElementById('menu_' + id).remove();

            }

            xhttp.open("GET", '/manager/menu/' + id + '/eliminar');
            xhttp.send();
        }
    </script>

@endsection
