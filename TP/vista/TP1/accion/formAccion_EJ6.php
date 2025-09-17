<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Ejercicio 4</title>
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP1/persona_EJ6.php';
    $datos = obtenerDato();
    $obj = new personaDeporte($datos);
    $valor = $obj->saludo();
    ?>
</head>

<body>

    <?php
    echo "<h1>Resultado del Ejercicio 6</h1>";
    echo $valor;
    ?>
    <a href='../EJ_6.php'>Volver al formulario</a>
</body>

</html>