/*
Este condicional no te permite moverte
por la pagina hasta que aceptes las cookies y te po e
el fondo en gris y resalta el div en el cual esta el mensaje

*/

if (localStorage.cookieMasMenu > 0) {
    document.getElementById('cookie1').style.display = 'none';
    $('html').css('overflow-y', 'scroll');
} else {
    $('html').css('overflow-y', 'hidden');
    document.getElementById('cookie1').style.display = 'block';
}


//Funcion que guarda en el navegador que aceptes las cookies
//que ya las has aceptado y no te vuelve a salir el mensaje
//es llamada por el onclick del boton de aceptar
function controlcookies() {
    localStorage.cookieMasMenu = (localStorage.cookieMasMenu || 0);
    localStorage.cookieMasMenu++;
    cookie1.style.display = 'none';
    $('html').css('overflow-y', 'scroll');
}



/*
    Funcion que cuando creas un menu
    te previsualiza el nombre del archivo que has seleccionado
    y te hace focus en la imagen que esta puesta como label file
*/

'use strict';

; (function (document, window, index) {
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function (input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener('change', function (e) {
            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                label.querySelector('span').innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });

        // Firefox bug fix
        input.addEventListener('focus', function () { input.classList.add('has-focus'); });
        input.addEventListener('blur', function () { input.classList.remove('has-focus'); });
    });
}(document, window, 0));










/*función que lee la url de un input type file y la coloca
como fondo de un div para poder ser previsualizada
y mejorar la experiencia de usuario
*/



function readURL1(input, name) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(name).css("background", "url('" + e.target.result + "') no-repeat");
            $(name).css("background-size", "cover");
            $(name).css("background-position", "center");
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#id_imagen1").change(function () {
    readURL1(this, '#img1');
    $('#btnImg1').addClass('show');
});

$("#id_imagen2").change(function () {
    readURL1(this, '#img2');
    $('#btnImg2').addClass('show');
});
$("#id_imagen3").change(function () {
    readURL1(this, '#img3');
    $('#btnImg3').addClass('show');
});
$("#id_imagen4").change(function () {
    readURL1(this, '#img4');
    $('#btnImg4').addClass('show');
});
$("#id_imagen5").change(function () {
    readURL1(this, '#img5');
    $('#btnImg5').addClass('show');
});

