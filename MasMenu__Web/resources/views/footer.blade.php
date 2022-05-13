<div class="w-100 mt-4">
    <p class="text-center">
        © <span id="anyo"></span> - MasMenu
    </p>
</div>


<script>
    /* Funcion simple que coge el año actual y lo guarda en el span mediante el id */
    var date = new Date();
    var texto = document.getElementById('anyo');
    texto.innerHTML = date.getFullYear();
</script>
