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
</head>

<body>
    <?php
    $titulo = $_POST['titulo'];
    $director = $_POST['director'];
    $actores = $_POST['actores'];
    $guion = $_POST['guion'];
    $produccion = $_POST['produccion'];
    $anio = $_POST['anio'];
    $nacionalidad = $_POST['nacionalidad'];
    $genero = $_POST['genero'];
    $duracion = $_POST['duracion'];
    $restriccionDeEdad = $_POST['rest_edad'];

    echo "<div id=salida>";
    echo "<label for=tituloPag id='tituloPag'>La pelicula introducida es</label>" . "<br/>" . "<br/>";
    echo "<label for='titulo'>Título:</label> " . $titulo . "<br/>";
    echo "<label for='director'>Director:</label> " . $director . "<br/>";
    echo "<label for='actores'>Actores:</label> " . $actores . "<br/>";
    echo "<label for='guion'>Guion:</label> " . $guion . "<br/>";
    echo "<label for='produccion'>Producción:</label> " . $produccion . "<br/>";
    echo "<label for='anio'>Año:</label> " . $anio . "<br/>";
    echo "<label for='nacionalidad'>Nacionalidad:</label> " . $nacionalidad . "<br/>";
    echo "<label for='genero'>Género:</label> " . $genero . "<br/>";
    echo "<label for='duracion'>Duración:</label> " . $duracion . "<br/>";
    echo "<label for='restriccionDeEdad'>Restricción de edad:</label> " . $restriccionDeEdad . "<br/>";
    echo "<a href='../../vista/TP2/EJ_4.php'>Volver al formulario</a>";
    echo "</div>"

    ?>
</body>

</html>