<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista EJ2</title>
</head>

<body>
    <?php
    // Mostrar el total de horas
    echo "<h2>Resumen de Horas Cursadas</h2>";
    echo "Total de horas cursadas por semana: " . $_GET['totalHoras'] . " horas y " . $_GET['minutosRestantes'] . " minutos.";
    echo "<br>";
    echo '<a href="EJ_2.php">Volver</a>';
    ?>
</body>

</html>