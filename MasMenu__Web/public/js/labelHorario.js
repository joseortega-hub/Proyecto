/*
lunes
*/
if ($('#si_lunes').is(':checked')) {
    $('.lunesCe').addClass('active');

} else {
    $('.lunesAb').removeClass('active');
    $('.lunesInputs').addClass('escondido')
}
$('#si_lunes, #no_lunes').click(function () {
    if ($('#no_lunes').is(':checked')) {
        $('.lunesAb').addClass('active');
        $('.lunesCe').removeClass('active');
        $('.lunesInputs').addClass('escondido')

    } else {
        $('.lunesCe').addClass('active');
        $('.lunesAb').removeClass('active');
        $('.lunesInputs').removeClass('escondido')
    }
});

$('#lunes_tarde').click(function () {
    $('.inputTardeL').removeClass('escondido');
    $('.lunesT').removeClass('active');
    $('.lunesNt').addClass('active');
});
$('#lunes_no_tarde').click(function () {

    $('.lunesNt').removeClass('active');
    $('.lunesT').addClass('active');
    $('.inputTardeL').addClass('escondido');
});
/*
Martes
*/
if ($('#si_martes').is(':checked')) {
    $('.martesCe').addClass('active');

} else {
    $('.martesAb').removeClass('active');
    $('.martesInputs').addClass('escondido')
}
$('#si_martes, #no_martes').click(function () {
    if ($('#no_martes').is(':checked')) {
        $('.martesAb').addClass('active');
        $('.martesCe').removeClass('active');
        $('.martesInputs').addClass('escondido')

    } else {
        $('.martesCe').addClass('active');
        $('.martesAb').removeClass('active');
        $('.martesInputs').removeClass('escondido')
    }
});

$('#martes_tarde').click(function () {
    $('.inputTardeM').removeClass('escondido');
    $('.martesT').removeClass('active');
    $('.martesNt').addClass('active');
});
$('#martes_no_tarde').click(function () {

    $('.martesNt').removeClass('active');
    $('.martesT').addClass('active');
    $('.inputTardeM').addClass('escondido');
});

/*
Miercoles
*/
if ($('#si_miercoles').is(':checked')) {
    $('.miercolesCe').addClass('active');

} else {
    $('.miercolesAb').removeClass('active');
    $('.miercolesInputs').addClass('escondido')
}
$('#si_miercoles, #no_miercoles').click(function () {
    if ($('#no_miercoles').is(':checked')) {
        $('.miercolesAb').addClass('active');
        $('.miercolesCe').removeClass('active');
        $('.miercolesInputs').addClass('escondido')

    } else {
        $('.miercolesCe').addClass('active');
        $('.miercolesAb').removeClass('active');
        $('.miercolesInputs').removeClass('escondido')
    }
});

$('#miercoles_tarde').click(function () {
    $('.inputTardeMi').removeClass('escondido');
    $('.miercolesT').removeClass('active');
    $('.miercolesNt').addClass('active');
});
$('#miercoles_no_tarde').click(function () {

    $('.miercolesNt').removeClass('active');
    $('.miercolesT').addClass('active');
    $('.inputTardeMi').addClass('escondido');
});
/*
Jueves
*/
if ($('#si_jueves').is(':checked')) {
    $('.juevesCe').addClass('active');

} else {
    $('.juevesAb').removeClass('active');
    $('.juevesInputs').addClass('escondido')
}
$('#si_jueves, #no_jueves').click(function () {
    if ($('#no_jueves').is(':checked')) {
        $('.juevesAb').addClass('active');
        $('.juevesCe').removeClass('active');
        $('.juevesInputs').addClass('escondido')

    } else {
        $('.juevesCe').addClass('active');
        $('.juevesAb').removeClass('active');
        $('.juevesInputs').removeClass('escondido')
    }
});

$('#jueves_tarde').click(function () {
    $('.inputTardeJ').removeClass('escondido');
    $('.juevesT').removeClass('active');
    $('.juevesNt').addClass('active');
});
$('#jueves_no_tarde').click(function () {

    $('.juevesNt').removeClass('active');
    $('.juevesT').addClass('active');
    $('.inputTardeJ').addClass('escondido');
});
/*
Viernes
*/
if ($('#si_viernes').is(':checked')) {
    $('.viernesCe').addClass('active');

} else {
    $('.viernesAb').removeClass('active');
    $('.viernesInputs').addClass('escondido')
}
$('#si_viernes, #no_viernes').click(function () {
    if ($('#no_viernes').is(':checked')) {
        $('.viernesAb').addClass('active');
        $('.viernesCe').removeClass('active');
        $('.viernesInputs').addClass('escondido')

    } else {
        $('.viernesCe').addClass('active');
        $('.viernesAb').removeClass('active');
        $('.viernesInputs').removeClass('escondido')
    }
});

$('#viernes_tarde').click(function () {
    $('.inputTardeV').removeClass('escondido');
    $('.viernesT').removeClass('active');
    $('.viernesNt').addClass('active');
});
$('#viernes_no_tarde').click(function () {

    $('.viernesNt').removeClass('active');
    $('.viernesT').addClass('active');
    $('.inputTardeV').addClass('escondido');
});
/*
Sabado
*/
if ($('#si_sabado').is(':checked')) {
    $('.sabadoCe').addClass('active');

} else {
    $('.sabadoAb').removeClass('active');
    $('.sabadoInputs').addClass('escondido')
}
$('#si_sabado, #no_sabado').click(function () {
    if ($('#no_sabado').is(':checked')) {
        $('.sabadoAb').addClass('active');
        $('.sabadoCe').removeClass('active');
        $('.sabadoInputs').addClass('escondido')

    } else {
        $('.sabadoCe').addClass('active');
        $('.sabadoAb').removeClass('active');
        $('.sabadoInputs').removeClass('escondido')
    }
});

$('#sabado_tarde').click(function () {
    $('.inputTardeS').removeClass('escondido');
    $('.sabadoT').removeClass('active');
    $('.sabadoNt').addClass('active');
});
$('#sabado_no_tarde').click(function () {

    $('.sabadoNt').removeClass('active');
    $('.sabadoT').addClass('active');
    $('.inputTardeS').addClass('escondido');
});
/*
Domingo
*/
if ($('#si_domingo').is(':checked')) {
    $('.domingoCe').addClass('active');

} else {
    $('.domingoAb').removeClass('active');
    $('.domingoInputs').addClass('escondido')
}
$('#si_domingo, #no_domingo').click(function () {
    if ($('#no_domingo').is(':checked')) {
        $('.domingoAb').addClass('active');
        $('.domingoCe').removeClass('active');
        $('.domingoInputs').addClass('escondido')

    } else {
        $('.domingoCe').addClass('active');
        $('.domingoAb').removeClass('active');
        $('.domingoInputs').removeClass('escondido')
    }
});

$('#domingo_tarde').click(function () {
    $('.inputTardeD').removeClass('escondido');
    $('.domingoT').removeClass('active');
    $('.domingoNt').addClass('active');
});
$('#domingo_no_tarde').click(function () {

    $('.domingoNt').removeClass('active');
    $('.domingoT').addClass('active');
    $('.inputTardeD').addClass('escondido');
});






