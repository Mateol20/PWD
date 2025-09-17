<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista EJ2</title>
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP1/Persona_EJ3.php';
    $datos = obtenerDato();
    $obj = new Persona($datos);
    $valor = $obj->saludo();
    ?>
</head>

<body>
    <?php
    // Mostrar el total de horas
    echo "<h2>Saludo Persona</h2>";
    echo $valor;
    echo "<br>";

    ?>
    <a href='../EJ_3.php'>Volver al formulario</a>
</body>

</html>