<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista EJ2</title>
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP1/contador_hora_EJ2.php';
    $datos = obtenerDato();
    $obj = new Hora;
    $valor = $obj->contarHora($datos);
    ?>
</head>

<body>
    <?php
    // Mostrar el total de horas
    echo "<h2>Resumen de Horas Cursadas</h2>";
    echo $valor;
    echo "<br>";

    ?>
    <a href='../EJ_2.php'>Volver al formulario</a>
</body>

</html>