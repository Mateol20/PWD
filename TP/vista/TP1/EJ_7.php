<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style_header.css" />
    <link rel="stylesheet" href="../css/style_footer.css" />
    <link rel="stylesheet" href="../css/style_calculadora.css" />
    <title>Ejercicio 7</title>
</head>

<body>

    <?php

    echo "<form method='post' action='./accion/formAccion_EJ7.php'>";

    echo "<input type='number' name='numero1' id='numero1' placeholder='Escriba un numero'>";
    echo "<br/>";
    echo "<input type='number' name='numero2' id='numero2' placeholder='Escriba un numero'>";
    echo "<br/>";
    echo "<select name='operacion' id='operacion'>";
    echo "<option value='null'> Elija la operacion a realizar </option>";
    echo "<option value='suma'> Sumar </option>";
    echo "<option value='resta'> Restar </option>";
    echo "<option value='multiplicar'> Multiplicar </option>";
    echo "</select>";

    echo "<br/>";

    echo "<button type='submit'> ENVIAR </button>";
    echo "</form>";

    ?>
    <script src="../js/cargarFyH.js"></script>
</body>

</html>