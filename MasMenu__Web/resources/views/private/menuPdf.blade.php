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
        }

    </style>
</head>

<body>

    <div class="container">
        <h1>{{ $info['restaurante']->nombre }}</h1>
        <h2>Menús disponibles:</h2>
        <ul>
            @foreach ($info['menus'] as $menu)
                <li>
                    <h3>{{ $menu->nombre }}</h3>

                    <img src="img/QR/indice.jpg" alt="">

                </li>
            @endforeach
        </ul>
    </div>



</body>

</html>
