<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        body {
            background-color: grey;
        }

        #salida {
            background-color: rgb(229, 239, 226);
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
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP2/control_EJ4.php';
    $datos = obtenerDato();
    $obj = new Cine_TP2($datos);
    $mensaje = $obj -> mensajeCine();
    ?>
</head>

<body>
    <?php
    echo "<div id='salida'>";
    echo $mensaje;
    echo "</div>";
    ?>
</body>

</html>