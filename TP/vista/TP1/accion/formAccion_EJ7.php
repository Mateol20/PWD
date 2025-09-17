<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_resumen.css">
    <?php
    include_once '../../../util/encapsular.php';
    include_once '../../../control/TP1/calculadora_EJ7.php';
    $datos = obtenerDato();
    $objeto = new Calculadora;
    $resultado = $objeto->calcular($datos);
    ?>
    <title>Resultado - Ejercicio 7</title>
</head>

<body>
    <div class="result-container">
        <?php
        echo "<h1>Resultado del Ejercicio 7</h1>";
        echo "<p class='result-message'><strong>" . $resultado . "</strong></p>";
        echo "<a href='../EJ_7.php'>Volver a la calculadora</a>";
        ?>
    </div>
</body>

</html>