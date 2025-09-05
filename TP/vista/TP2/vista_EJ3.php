<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista EJ3</title>
</head>

<body>
    <style>
        body {
            background-color: grey;
        }

        #salida {
            background-color: rgba(91, 100, 184, 1);
            height: 40vh;
            width: 30vw;
            padding: 20px;
            border-radius: 5%;
        }

        label {
            font-weight: 700;
        }

        #tituloPag {
            font-size: x-large;
            color: rgb(64, 131, 159);
        }
    </style>
    <?php
    echo "<div id='salida'>";
    echo $mensaje;
    echo "</div>";
    echo "<a href='../../vista/TP2/EJ_3.php'>Volver al formulario</a>";
    ?>
</body>

</html>