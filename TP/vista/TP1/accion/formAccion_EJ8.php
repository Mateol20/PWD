<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_resumen.css">
    <title>Resultado - Ejercicio 8</title>
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP1/cine_EJ8.php';
    $datos = obtenerDato();
    $objeto = new Cine;
    $resultado = $objeto->precioEntrada($datos);
    ?>
</head>

<body>
    <div class="result-container">
        <?php
        echo "<h1>Resultado del Ejercicio 8</h1>";
        echo "<p class='result-message'><strong>" . $resultado . "</strong></p>";
        echo "<a href='../EJ_8.php'>Volver al formulario</a>";
        ?>
    </div>
</body>

</html>