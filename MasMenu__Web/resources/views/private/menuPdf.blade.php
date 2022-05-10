<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <style>
        * {
            font-family: Arial, Helvetica, sans-serif
        }

        ul {
            padding: 0;
        }

        li {
            list-style: none;
        }

        h1 {
            color: #000;
            text-align: center;
            border-bottom: 1px solid #c0c0c0;
            margin: 0 0 20px 0;
            padding: 0 0 20px 0;
        }

        h2 {
            color: #222;
        }

        h3 {
            color: #747474;
            margin: 0;
        }

    </style>
</head>

<body>

    <div class="container">
        <h1>{{ $info['restaurante']->nombre }}</h1>
        <h2>Datos del retaurante</h2>
        <ul>
            <li>
                <h3><small>Ciudad: </small>{{ $info['restaurante']->ciudad }}</h3>
            </li>
            <li>
                <h3><small>Provincia: </small>{{ $info['restaurante']->region }}</h3>
            </li>
            <li>
                <h3><small>Pais: </small>{{ $info['restaurante']->pais }}</h3>
            </li>
            <li>
                <h3><small>Dirección: </small>{{ $info['restaurante']->direccion }}</h3>
            </li>
        </ul>
    </div>



</body>

</html>
