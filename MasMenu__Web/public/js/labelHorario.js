/*
esto activa la función de arriba cuando detecta que el input
ha sido modificado
*/
$("#id_imagen").change(function () {
    readURL(this);
});

$('#id_imagen').click(function () {
    $('.botonNuevaImagen, .alertaImagen').addClass('show');
});

$('#paso2, #paso2_2, #paso2_3').click(function () {
    $('.paso1, .paso3, .paso4').removeClass('active');
    $('.paso2').addClass('active');
});

$('#paso3, #paso3_2, #paso3_3').click(function () {
    $('.paso1, .paso2, .paso4').removeClass('active');
    $('.paso3').addClass('active');
});

$('#paso4, #paso4_2, #paso4_3').click(function () {
    $('.paso1, .paso2, .paso3').removeClass('active');
    $('.paso4').addClass('active');
});





/*
lunes, funcion que va cambiando los estilos a los inputs y su visibilidad mediante clases
 (añadiendolas y eliminandolas ) y teniendo en cuenta sus valores cheked que estara puesto por defecto
o cuando se haga click en los unputs correspondientes
*/
if ($('#no_lunes').is(':checked')) {
    $('.lunes').addClass('active');
} else {
    $('.lunes').removeClass('active');
}
$('#si_lunes, #no_lunes').click(function () {
    if ($('#no_lunes').is(':checked')) {
        $('.lunes').addClass('active');
    } else {
        $('.lunes').removeClass('active');
    }
});
if ($('#no_turno_lunes').is(':checked')) {
    $('.lunes').addClass('active2');
} else {
    $('.lunes').removeClass('active2');
}
$('#si_turno_lunes, #no_turno_lunes').click(function () {
    if ($('#no_turno_lunes').is(':checked')) {
        $('.lunes').removeClass('active2');
    } else {
        $('.lunes').addClass('active2');
    }
});
if ($('#no_turno_lunes').is(':checked')) {
    $('.lunes').removeClass('active2');
} else {
    $('.lunes').addClass('active2');
}



/*
martes
*/
if ($('#no_martes').is(':checked')) {
    $('.martes').addClass('active');
} else {
    $('.martes').removeClass('active');
}
$('#si_martes, #no_martes').click(function () {
    if ($('#no_martes').is(':checked')) {
        $('.martes').addClass('active');
    } else {
        $('.martes').removeClass('active');
    }
});
if ($('#no_turno_martes').is(':checked')) {
    $('.martes').addClass('active2');
} else {
    $('.martes').removeClass('active2');
}
$('#si_turno_martes, #no_turno_martes').click(function () {
    if ($('#no_turno_martes').is(':checked')) {
        $('.martes').removeClass('active2');
    } else {
        $('.martes').addClass('active2');
    }
});
if ($('#no_turno_martes').is(':checked')) {
    $('.martes').removeClass('active2');
} else {
    $('.martes').addClass('active2');
}

/*
miercoles
*/
if ($('#no_miercoles').is(':checked')) {
    $('.miercoles').addClass('active');
} else {
    $('.miercoles').removeClass('active');
}
$('#si_miercoles, #no_miercoles').click(function () {
    if ($('#no_miercoles').is(':checked')) {
        $('.miercoles').addClass('active');
    } else {
        $('.miercoles').removeClass('active');
    }
});
if ($('#no_turno_miercoles').is(':checked')) {
    $('.miercoles').addClass('active2');
} else {
    $('.miercoles').removeClass('active2');
}
$('#si_turno_miercoles, #no_turno_miercoles').click(function () {
    if ($('#no_turno_miercoles').is(':checked')) {
        $('.miercoles').removeClass('active2');
    } else {
        $('.miercoles').addClass('active2');
    }
});
if ($('#no_turno_miercoles').is(':checked')) {
    $('.miercoles').removeClass('active2');
} else {
    $('.miercoles').addClass('active2');
}


/*
jueves
*/
if ($('#no_jueves').is(':checked')) {
    $('.jueves').addClass('active');
} else {
    $('.jueves').removeClass('active');
}
$('#si_jueves, #no_jueves').click(function () {
    if ($('#no_jueves').is(':checked')) {
        $('.jueves').addClass('active');
    } else {
        $('.jueves').removeClass('active');
    }
});
if ($('#no_turno_jueves').is(':checked')) {
    $('.jueves').addClass('active2');
} else {
    $('.jueves').removeClass('active2');
}
$('#si_turno_jueves, #no_turno_jueves').click(function () {
    if ($('#no_turno_jueves').is(':checked')) {
        $('.jueves').removeClass('active2');
    } else {
        $('.jueves').addClass('active2');
    }
});
if ($('#no_turno_jueves').is(':checked')) {
    $('.jueves').removeClass('active2');
} else {
    $('.jueves').addClass('active2');
}




/*
viernes
*/
if ($('#no_viernes').is(':checked')) {
    $('.viernes').addClass('active');
} else {
    $('.viernes').removeClass('active');
}
$('#si_viernes, #no_viernes').click(function () {
    if ($('#no_viernes').is(':checked')) {
        $('.viernes').addClass('active');
    } else {
        $('.viernes').removeClass('active');
    }
});
if ($('#no_turno_viernes').is(':checked')) {
    $('.viernes').addClass('active2');
} else {
    $('.viernes').removeClass('active2');
}
$('#si_turno_viernes, #no_turno_viernes').click(function () {
    if ($('#no_turno_viernes').is(':checked')) {
        $('.viernes').removeClass('active2');
    } else {
        $('.viernes').addClass('active2');
    }
});
if ($('#no_turno_viernes').is(':checked')) {
    $('.viernes').removeClass('active2');
} else {
    $('.viernes').addClass('active2');
}



/*
sabado
*/
if ($('#no_sabado').is(':checked')) {
    $('.sabado').addClass('active');
} else {
    $('.sabado').removeClass('active');
}
$('#si_sabado, #no_sabado').click(function () {
    if ($('#no_sabado').is(':checked')) {
        $('.sabado').addClass('active');
    } else {
        $('.sabado').removeClass('active');
    }
});
if ($('#no_turno_sabado').is(':checked')) {
    $('.sabado').addClass('active2');
} else {
    $('.sabado').removeClass('active2');
}
$('#si_turno_sabado, #no_turno_sabado').click(function () {
    if ($('#no_turno_sabado').is(':checked')) {
        $('.sabado').removeClass('active2');
    } else {
        $('.sabado').addClass('active2');
    }
});
if ($('#no_turno_sabado').is(':checked')) {
    $('.sabado').removeClass('active2');
} else {
    $('.sabado').addClass('active2');
}



/*
domingo
*/
if ($('#no_domingo').is(':checked')) {
    $('.domingo').addClass('active');
} else {
    $('.domingo').removeClass('active');
}
$('#si_domingo, #no_domingo').click(function () {
    if ($('#no_domingo').is(':checked')) {
        $('.domingo').addClass('active');
    } else {
        $('.domingo').removeClass('active');
    }
});
if ($('#no_turno_domingo').is(':checked')) {
    $('.domingo').addClass('active2');
} else {
    $('.domingo').removeClass('active2');
}
$('#si_turno_domingo, #no_turno_domingo').click(function () {
    if ($('#no_turno_domingo').is(':checked')) {
        $('.domingo').removeClass('active2');
    } else {
        $('.domingo').addClass('active2');
    }
});
if ($('#no_turno_domingo').is(':checked')) {
    $('.domingo').removeClass('active2');
} else {
    $('.domingo').addClass('active2');
}
