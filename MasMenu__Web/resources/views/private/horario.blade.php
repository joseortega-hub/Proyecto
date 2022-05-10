<form method="POST" action="{{ route('editar_horario', $horario->id) }}" enctype="multipart/form-data">
    @csrf
    <!-- lunes -->
    <p class="mb-0 mt-3">Lunes</p>
    <div class="col-12 p-2 border rounded lunes">
        <div class="radio">
            <input name="lunes" id="si_lunes" @if ($horario->lunes_abierto == 1) checked @endif type="radio" value="1">
            <label for="si_lunes">Abierto</label>
            <input name="lunes" id="no_lunes" @if ($horario->lunes_abierto == 0) checked @endif type="radio" value="0">
            <label for="no_lunes" class="no">Cerrado</label>
            <small>-</small>
            <input name="lunesTurno" id="si_turno_lunes" @if ($horario->lunes_turnos == 0) checked @endif type="radio"
                value="0" class="turno">
            <label for="si_turno_lunes" class="turno">1 turno</label>
            <input name="lunesTurno" id="no_turno_lunes" @if ($horario->lunes_turnos == 1) checked @endif type="radio"
                value="1" class="turno">
            <label for="no_turno_lunes" class="turno">2 turnos</label>
        </div>
        <div class="row mx-0 mt-2 caja">
            <div class="col-12 p-0">
                <div class="row m-0">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="lunesOpen" value="{{ $horario->lunes_abrir1 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="lunesClose" value="{{ $horario->lunes_cerrar1 }}">
                    </div>
                </div>
                <div class="row mx-0 mt-1 turnoCaja">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="lunesOpen2" value="{{ $horario->lunes_abrir2 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="lunesClose2" value="{{ $horario->lunes_cerrar2 }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- martes -->
    <p class="mb-0 mt-3">Martes</p>
    <div class="col-12 p-2 border rounded martes">
        <div class="radio">
            <input name="martes" id="si_martes" @if ($horario->martes_abierto == 1) checked @endif type="radio" value="1">
            <label for="si_martes">Abierto</label>
            <input name="martes" id="no_martes" @if ($horario->martes_abierto == 0) checked @endif type="radio" value="0">
            <label for="no_martes" class="no">Cerrado</label>
            <small>-</small>
            <input name="martesTurno" id="si_turno_martes" @if ($horario->martes_turnos == 0) checked @endif type="radio"
                value="0" class="turno">
            <label for="si_turno_martes" class="turno">1 turno</label>
            <input name="martesTurno" id="no_turno_martes" @if ($horario->martes_turnos == 1) checked @endif type="radio"
                value="1" class="turno">
            <label for="no_turno_martes" class="turno">2 turnos</label>
        </div>
        <div class="row mx-0 mt-2 caja">
            <div class="col-12 p-0">
                <div class="row m-0">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="martesOpen" value="{{ $horario->martes_abrir1 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="martesClose" value="{{ $horario->martes_cerrar1 }}">
                    </div>
                </div>
                <div class="row mx-0 mt-1 turnoCaja">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="martesOpen2" value="{{ $horario->martes_abrir2 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="martesClose2" value="{{ $horario->martes_cerrar2 }}">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- miercoles -->
    <p class="mb-0 mt-3">Miercoles</p>
    <div class="col-12 p-2 border rounded miercoles">
        <div class="radio">
            <input name="miercoles" id="si_miercoles" @if ($horario->miercoles_abierto == 1) checked @endif type="radio"
                value="1">
            <label for="si_miercoles">Abierto</label>
            <input name="miercoles" id="no_miercoles" @if ($horario->miercoles_abierto == 0) checked @endif type="radio"
                value="0">
            <label for="no_miercoles" class="no">Cerrado</label>
            <small>-</small>
            <input name="miercolesTurno" id="si_turno_miercoles" @if ($horario->miercoles_turnos == 0) checked @endif
                type="radio" value="0" class="turno">
            <label for="si_turno_miercoles" class="turno">1 turno</label>
            <input name="miercolesTurno" id="no_turno_miercoles" @if ($horario->miercoles_turnos == 1) checked @endif
                type="radio" value="1" class="turno">
            <label for="no_turno_miercoles" class="turno">2 turnos</label>
        </div>
        <div class="row mx-0 mt-2 caja">
            <div class="col-12 p-0">
                <div class="row m-0">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="miercolesOpen" value="{{ $horario->miercoles_abrir1 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="miercolesClose" value="{{ $horario->miercoles_cerrar1 }}">
                    </div>
                </div>
                <div class="row mx-0 mt-1 turnoCaja">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="miercolesOpen2" value="{{ $horario->miercoles_abrir2 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="miercolesClose2" value="{{ $horario->miercoles_cerrar2 }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jueves -->
    <p class="mb-0 mt-3">Jueves</p>
    <div class="col-12 p-2 border rounded jueves">
        <div class="radio">
            <input name="jueves" id="si_jueves" @if ($horario->jueves_abierto == 1) checked @endif type="radio"
                value="1">
            <label for="si_jueves">Abierto</label>
            <input name="jueves" id="no_jueves" @if ($horario->jueves_abierto == 0) checked @endif type="radio"
                value="0">
            <label for="no_jueves" class="no">Cerrado</label>
            <small>-</small>
            <input name="juevesTurno" id="si_turno_jueves" @if ($horario->jueves_turnos == 0) checked @endif
                type="radio" value="0" class="turno">
            <label for="si_turno_jueves" class="turno">1 turno</label>
            <input name="juevesTurno" id="no_turno_jueves" @if ($horario->jueves_turnos == 1) checked @endif
                type="radio" value="1" class="turno">
            <label for="no_turno_jueves" class="turno">2 turnos</label>
        </div>
        <div class="row mx-0 mt-2 caja">
            <div class="col-12 p-0">
                <div class="row m-0">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="juevesOpen" value="{{ $horario->jueves_abrir1 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="juevesClose" value="{{ $horario->jueves_cerrar1 }}">
                    </div>
                </div>
                <div class="row mx-0 mt-1 turnoCaja">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="juevesOpen2" value="{{ $horario->jueves_abrir2 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="juevesClose2" value="{{ $horario->jueves_cerrar2 }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- viernes -->
    <p class="mb-0 mt-3">Viernes</p>
    <div class="col-12 p-2 border rounded viernes">
        <div class="radio">
            <input name="viernes" id="si_viernes" @if ($horario->viernes_abierto == 1) checked @endif type="radio"
                value="1">
            <label for="si_viernes">Abierto</label>
            <input name="viernes" id="no_viernes" @if ($horario->viernes_abierto == 0) checked @endif type="radio"
                value="0">
            <label for="no_viernes" class="no">Cerrado</label>
            <small>-</small>
            <input name="viernesTurno" id="si_turno_viernes" @if ($horario->viernes_turnos == 0) checked @endif
                type="radio" value="0" class="turno">
            <label for="si_turno_viernes" class="turno">1 turno</label>
            <input name="viernesTurno" id="no_turno_viernes" @if ($horario->viernes_turnos == 1) checked @endif
                type="radio" value="1" class="turno">
            <label for="no_turno_viernes" class="turno">2 turnos</label>
        </div>
        <div class="row mx-0 mt-2 caja">
            <div class="col-12 p-0">
                <div class="row m-0">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="viernesOpen" value="{{ $horario->viernes_abrir1 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="viernesClose" value="{{ $horario->viernes_cerrar1 }}">
                    </div>
                </div>
                <div class="row mx-0 mt-1 turnoCaja">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="viernesOpen2" value="{{ $horario->viernes_abrir2 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="viernesClose2" value="{{ $horario->viernes_cerrar2 }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sabado -->
    <p class="mb-0 mt-3">Sabado</p>
    <div class="col-12 p-2 border rounded sabado bg-white">
        <div class="radio">
            <input name="sabado" id="si_sabado" @if ($horario->sabado_abierto == 1) checked @endif type="radio"
                value="1">
            <label for="si_sabado">Abierto</label>
            <input name="sabado" id="no_sabado" @if ($horario->sabado_abierto == 0) checked @endif type="radio"
                value="0">
            <label for="no_sabado" class="no">Cerrado</label>
            <small>-</small>
            <input name="sabadoTurno" id="si_turno_sabado" @if ($horario->sabado_turnos == 0) checked @endif
                type="radio" value="0" class="turno">
            <label for="si_turno_sabado" class="turno">1 turno</label>
            <input name="sabadoTurno" id="no_turno_sabado" @if ($horario->sabado_turnos == 1) checked @endif
                type="radio" value="1" class="turno">
            <label for="no_turno_sabado" class="turno">2 turnos</label>
        </div>
        <div class="row mx-0 mt-2 caja">
            <div class="col-12 p-0">
                <div class="row m-0">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="sabadoOpen" value="{{ $horario->sabado_abrir1 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="sabadoClose" value="{{ $horario->sabado_cerrar1 }}">
                    </div>
                </div>
                <div class="row mx-0 mt-1 turnoCaja">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="sabadoOpen2" value="{{ $horario->sabado_abrir2 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="sabadoClose2" value="{{ $horario->sabado_cerrar2 }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- domingo -->
    <p class="mb-0 mt-3">Domingo</p>
    <div class="col-12 p-2 border rounded domingo">
        <div class="radio">
            <input name="domingo" id="si_domingo" @if ($horario->domingo_abierto == 1) checked @endif type="radio"
                value="1">
            <label for="si_domingo">Abierto</label>
            <input name="domingo" id="no_domingo" @if ($horario->domingo_abierto == 0) checked @endif type="radio"
                value="0">
            <label for="no_domingo" class="no">Cerrado</label>
            <small>-</small>
            <input name="domingoTurno" id="si_turno_domingo" @if ($horario->domingo_turnos == 0) checked @endif
                type="radio" value="0" class="turno">
            <label for="si_turno_domingo" class="turno">1 turno</label>
            <input name="domingoTurno" id="no_turno_domingo" @if ($horario->domingo_turnos == 1) checked @endif
                type="radio" value="1" class="turno">
            <label for="no_turno_domingo" class="turno">2 turnos</label>
        </div>
        <div class="row mx-0 mt-2 caja">
            <div class="col-12 p-0">
                <div class="row m-0">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="domingoOpen" value="{{ $horario->domingo_abrir1 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="domingoClose" value="{{ $horario->domingo_cerrar1 }}">
                    </div>
                </div>
                <div class="row mx-0 mt-1 turnoCaja">
                    <div class="col-6 pr-1 pl-0 ">
                        <input type="text" class="inputLocal border rounded" required placeholder="Apertura"
                            name="domingoOpen2" value="{{ $horario->domingo_abrir2 }}">
                    </div>
                    <div class="col-6 pr-0 pl-1">
                        <input type="text" class="inputLocal border rounded" required placeholder="Cierre"
                            name="domingoClose2" value="{{ $horario->domingo_cerrar2 }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 text-right">
        <button type="submit" class="btn btn-primary mt-2">
            Confirmar cambios
        </button>
    </div>
</form>
