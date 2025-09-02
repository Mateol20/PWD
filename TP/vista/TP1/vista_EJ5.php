<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_resumen.css">
    <title>Resultado - Ejercicio 5</title>
</head>

<body>

    <?php
    echo "<h1>Resultado del Ejercicio 5</h1>";
    echo "<p>Hola, soy <strong>" . $nombre . " " . $apellido . "</strong>, tengo <strong>" . $edad . "</strong> años y vivo en <strong>" . $direccion . "</strong>.</p>";
    echo "<p>Sexo: <strong>" . $sexo . "</strong></p>";
    echo "<p>Nivel de estudios: <strong>" . $estudios . "</strong></p>";
    echo "<p><strong>" . $mensaje_edad . "</strong>.</p>";
    echo "<a href='../../vista/TP1/EJ_5.php'>Volver al formulario</a>";
    ?>

</body>

</html>