<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Ejercicio 4</title>
</head>
<body>

<?php
echo "<form method='get' action='../../control/TP1/calcular_edad_EJ4.php'>";
echo "<label for='nombre'>Nombre </label>";
echo "<input type=text name='nombre' id='nombre'/>";
echo"<br/";

echo "<label for='apellido'>Apellido </label>";
echo "<input type=text name='apellido' id='apellido'/>";
echo"<br/";

echo "<label for='edad'>Edad </label>";
echo "<input type=text name='edad' id='edad'>";
echo"<br/";

echo "<label for='direccion'>Direccion </label>";
echo "<input type=text name='direccion' id='direccion'>";

echo"<br/>";
echo "<button type='submit'> ENVIAR </button>";
echo "</form>";
?>

</body>
</html>